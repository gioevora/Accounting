$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    })

    start()

    $('.add-form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: `/api/contacts/add`,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (res) {
                toastr.success(res.msg);
                location.href = `/contacts/view/${sessionStorage.getItem("type")}`
            },
            error: function (res) {
                console.log(res)
            }
        });
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
            url: `/api/contacts/archive`,
            method: "POST",
            data: {ids: ids},
            success: function () {
                search(sessionStorage.getItem("type"))
            },
            error: function (res) {
                console.log(res)
            }
        });
    })

    $('.groups-drop .new-btn, .groups-drop .back-btn').click(function (e) { 
        var parent = '.groups-drop'
        var class_name = $(this).attr('class')

        if (class_name.startsWith('new')) {
            $(`${parent} .container`).hide()
            $(`${parent} .add-form`).show()
        }
        else {
            $(`${parent} .container`).show()
            $(`${parent} .add-form`).hide()
        }
    });

    $('.groups-drop .add-btn').click(function (e) { 
        var parent = '.groups-drop'
        var name = $(`${parent} input[name=name]`).val()

        $.ajax({
            url: `/api/groups/add`,
            method: "POST",
            data: {name: name},
            success: function () {
                $(`${parent} input[name=name]`).val('')
                all_groups()

                $(`${parent} .container`).show()
                $(`${parent} .add-form`).hide()
            },
            error: function (res) {
                console.log(res)
            }
        });
    });

    $('.search-btn').click(function () { 
        sessionStorage.setItem("type", $(this).text().toLowerCase());
        location.href = `/contacts/view/${sessionStorage.getItem("type")}`
    });
})

var ids = []

function start() {
    var segments = location.href.split('/')

    if (segments[4] == "view") {
        all_groups()
        sessionStorage.setItem("type", segments[5]);
        search(sessionStorage.getItem("type"))
    }
    else if (segments[4] == "edit") {
        edit(segments[5])
    }
}

function search(type) {
    $(".tbl-div").empty();

    $.ajax({
        type: "GET",
        url: `/api/contacts/search/${type}`,
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

                    var keys = ["checkbox", "contact", "you_owe", "they_owe", "action"]

                    
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

                    for (var key of keys) {
                        var html = ""
                        if (key == 'action') {
                            html = action
                        }
                        else if (key == "checkbox") {
                            html = ""
                        }
                        else if (key == 'contact') {
                            var initials = ""
                            var name = record.name.split(' ')
                            for (var word of name) {
                                initials += word.charAt(0)
                            }
        
                            html =  `
                                        <div class='profile' style="background-color: ${record.profile_color};">${initials}</div>
                                        <span class='fw-bold'>${record.name}</span>
                                    `
                        }
                        else {
                            html = record[key]
                        }
                        tr.append($("<td>").html(html))
                    }

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

function edit(id) {
    $.ajax({
        type: "GET",
        url: `/api/contacts/get/${id}`,
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
                'people',
            ]

            var p_keys = ['last_name', 'first_name', 'email']

            for (var key of keys) {
                if (key == 'people' && record[key].length > 0) {
                    for (var p_key of p_keys) {
                        $(`.edit-form input[name=${p_key}]`).val(record[key][0][p_key]);
                    }
                }
                else {
                    $(`.edit-form input[name=${key}], .edit-form select[name=${key}]`).val(record[key]);
                }
            }
        }
    })
}

function all_groups() {
    $.ajax({
        type: "GET",
        url: `/api/groups/all`,
        success: function (res) {
            var items = '.groups-drop .items'
            $(items).empty()

            var records = res.records
            for (var record of records) {
                var html =  `
                                <li><a class="dropdown-items">${record.name}</a></li>
                            `
                $(items).append(html)
            }
        }
    })
}