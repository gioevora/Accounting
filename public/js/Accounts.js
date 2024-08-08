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
            url: `/api/accounts/add`,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (res) {
                toastr.success(res.msg);
                search('all')
        
                $(`.add-form`).trigger("reset");
                $(`.add-div`).modal("hide");
            },
            error: function (res) {
                console.log(res)
            }
        });
    })

    $('.edit-form').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: `/api/accounts/update`,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (res) {
                toastr.success(res.msg);
                search('all')

                $(`.edit-form`).trigger("reset");
                $(`.edit-div`).modal("hide");
            },
            error: function (res) {
                console.log(res)
            }
        });
    })

    $(document).on("click", "tr", function () {
        var id = ""
        $(this).data('id') == undefined ? id = $(this).prev().data('id') : id = $(this).data('id')

        $(".edit-form input[name=id]").val(id);
        $('.edit-div').modal('show')

        $.ajax({
            type: "GET",
            url: `/api/accounts/edit/${id}`,
            success: function (res) {
                var record = res.record;

                var keys = ["code", "name", "type", "tax", "settings"];
                var s_keys = ["on_dw", "on_ec", "payments"]

                var checked = []

                for (var key of keys) {
                    if (key == 'settings') {
                        for (var s_key of s_keys) {
                            if (record[s_key] == 1) { checked.push(s_key) }
                        }
                        $(`.edit-form input[name='${key}[]']`).val(checked) 
                    }
                    else {
                        $(`.edit-form input[name=${key}], .edit-form select[name=${key}]`).val(record[key]);
                    }
                }
            },
            error: function (res) {
                console.log(res)
            }
        })
    })
})

function start() {
    search('all') 
}

function search(type) {
    $(".tbl-div").empty();

    $.ajax({
        type: "GET",
        url: `/api/accounts/search/${type}`,
        success: function (res) {
            var records = res.records;
            console.log(records)

            var tbl = $("<table>").addClass("table tbl-records")

            var thead = $("<thead>");
            var thr = $("<tr>");

            var cols = ["", "Code", "Name", "Type", "Tax", "YTD"];
            for (var col of cols) {
                thr.append($("<th>").text(col))
            }

            thead.append(thr);
            tbl.append(thead);

            var tbody = $("<tbody>");
            if (records.length > 0) {
                for (var record of records) {
                    var tr = $("<tr>").data("id", record.id)

                    var keys = ["checkbox", "code", "name", "type", "tax", "ytd"]

                    for (var key of keys) {
                        var html = ""
                        if (key == "checkbox") {
                            html = ""
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