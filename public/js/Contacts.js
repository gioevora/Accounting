$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    })

    start()

    $('.search-btn').click(function () { 
        var type = $(this).text().toLowerCase()
        search(type)
    });

    $('.create-form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: `/contacts/add`,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (res) {
                toastr.success(res.msg);
            },
            error: function (res) {
                console.log(res)
            }
        });
    })

    $('.new-contact .submit-btn').on('click', function (e) {
        $('.create-form').submit()
    })

    $(document).on("click", ".edit-btn", function () {
        var tr = $(this).closest('tr')
        var id = ""
        tr.data('id') == undefined ? id = tr.prev().data('id') : id = tr.data('id')

        location.href = `/contacts/edit/${id}`
    })

    $(document).on("click", ".archive-btn", function () {
        var tr = $(this).closest('tr')
        var id = ""
        tr.data('id') == undefined ? id = tr.prev().data('id') : id = tr.data('id')
        ids[0] = id

        $.ajax({
            url: `/contacts/archive`,
            method: "POST",
            data: {ids: ids},
            success: function () {
                location.href = `/contacts/all`
            },
            error: function (res) {
                console.log(res)
            }
        });
    })
})

var ids = []

function start() {
    var url_segments = location.href.split('/')
    var page = url_segments[4]
    if (page == 'view') { 
        get_groups()
        search('all') 
    }
    else if (page == 'edit') { get(url_segments[5]) }
}

function get_groups() {
    $.ajax({
        type: "GET",
        url: `/contacts/get-groups`,
        success: function (res) {
            
        }
    })
}

function search(type) {
    $(".tbl-div").empty();

    $.ajax({
        type: "GET",
        url: `/contacts/search/${type}`,
        success: function (res) {
            var records = res.records;
            console.log(records)

            var tbl = $("<table>").addClass("table tbl-records")

            var thead = $("<thead>");
            var thr = $("<tr>");

            var cols = ["", "Contact", "You Owe", "They Owe", "Action"];
            for (var col of cols) {
                thr.append($("<th>").text(col))
            }

            thead.append(thr);
            tbl.append(thead);

            var tbody = $("<tbody>");
            if (records.length > 0) {
                for (var record of records) {
                    var tr = $("<tr>").data("id", record.id)

                    var initials = ""
                    var name = record.name.split(' ')
                    for (var word of name) {
                        initials += word.charAt(0)
                    }

                    var contact =  `
                                        <div class='profile' style="background-color: ${record.profile_color};">${initials}</div>
                                        <span class='fw-bold'>${record.name}</span>
                                    `

                    var action =    `
                                        <div class="d-inline-block text-nowrap">                
                                            <button class="btn" data-bs-toggle="dropdown">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end m-0">
                                                <i class="dropdown-item edit-btn">Edit</i>
                                                <i class="dropdown-item archive-btn">Archive</i>
                                            </div>
                                        </div>
                                    `

                    tr.append($("<td>").html(""))
                    tr.append($("<td>").html(contact))
                    tr.append($("<td>").html(null))
                    tr.append($("<td>").html(null))
                    tr.append($("<td>").html(action))
                    tbody.append(tr);
                }
            } 

            tbl.append(tbody);
            $(".tbl-div").append(tbl);

            var data_table = $('.tbl-records').DataTable({
                responsive: true,
                columnDefs: [{
                    render: DataTable.render.select(),
                    targets: 0
                }],
                select: {
                    style: 'multi',
                    selector: 'td:first-child',
                },
                order: [
                    [1, 'asc']
                ]
            })
        },
        error: function (res) {
            console.log(res);
        },
    });
}

function get(id) {
    $.ajax({
        type: "GET",
        url: `/contacts/get/${id}`,
        success: function (res) {
            var record = res.record;
            console.log(record)

            var keys = [
                'name', 
                'number', 
                'phone_country',
                'phone_area',
                'phone_number',
                'mobile_country',
                'mobile_area',
                'mobile_number',
                'dd_country',
                'dd_area',
                'dd_number',
                'fax_country',
                'fax_area',
                'fax_number',
                'website',
                'brn',
                'notes',
                'bank_acc_name',
                'bank_acc_num',
                'details',
                'tax_id_num',
                'currency',
                'last_name',
                'first_name',
                'email',
            ]

            var person_keys = ['last_name', 'first_name', 'email']

            for (var key of keys) {
                if (person_keys.includes(key)) {
                    $(`.edit-contact input[name=${key}]`).val(record['people'][0][key]);
                }
                else {
                    $(`.edit-contact input[name=${key}], .edit-contact select[name=${key}]`).val(record[key]);
                }
            }
        }
    })
}