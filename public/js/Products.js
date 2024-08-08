$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    })

    start()

    $('#tracking').on('change', function (e) {
        if ($(this).prop('checked')) {
            var bool = true
            $('.inventory-categ').show()
        }
        else {
            bool = false
            $('.inventory-categ').hide()
        }


        $('#purchase, #sell').prop('checked', bool).trigger('change')
        $('#purchase, #sell').attr('disabled', bool).trigger('change')
    })

    $('#purchase, #sell').on('change', function (e) {
        var id = $(this).attr('id')
  
        if ($(this).prop('checked')) {
            $(`.${id}-div`).show()
        }
        else {
            $(`.${id}-div`).hide()
        }
    })

    $('.create-form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: `/business/add`,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (res) {
                toastr.success(res.msg);
                all()
                $('.create-form').trigger('reset')
                $('.new-product-modal').modal('hide')
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

        $(".edit-form input[name=id]").val(id);
        $('.edit-product-modal').modal('show')

        $.ajax({
            type: "GET",
            url: `/business/get/${id}`,
            success: function (res) {
                console.log(res)
                var record = res.record;
                var keys = ["code", "name", "item_details"];
                var detail_keys = ["price", "account_id", "tax", "description"]

                for (var key of keys) {
                    if (key == 'item_details') {
                        for (var detail of record[key]) {
                            var type = detail['type'].toLowerCase()
                            for (var detail_key of detail_keys) {
                                $(`.edit-form input[name=${type}_${detail_key}]`).val(detail[detail_key]);
                            }
                        }
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

    $('.edit-form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: `/business/update`,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (res) {
                toastr.success(res.msg);
                all()
                $(`.edit-form`).trigger("reset");
                $(`.edit-product-modal`).modal("hide");
            },
            error: function (res) {
                console.log(res)
            }
        });
    })

    $(document).on("click", ".archive-btn", function () {
        var tr = $(this).closest('tr')
        var id = ""
        tr.data('id') == undefined ? id = tr.prev().data('id') : id = tr.data('id')
        ids[0] = id

        $.ajax({
            url: `/business/archive`,
            method: "POST",
            data: {ids: ids},
            success: function () {
                all()
            },
            error: function (res) {
                console.log(res)
            }
        });
    })

    $(document).on("click", ".delete-btn", function () {
        var tr = $(this).closest('tr')
        var id = ""
        tr.data('id') == undefined ? id = tr.prev().data('id') : id = tr.data('id')
        ids[0] = id

        $.ajax({
            url: `/business/delete`,
            method: "POST",
            data: {ids: ids},
            success: function () {
                all()
            },
            error: function (res) {
                console.log(res)
            }
        });
    })
});

var ids = []

function start() {
    all()
}

function all() {
    $(".tbl-div").empty();

    $.ajax({
        type: "GET",
        url: `/business/all`,
        success: function (res) {
            var records = res.records;
            console.log(records)

            var tbl = $("<table>").addClass("table tbl-records")

            var thead = $("<thead>");
            var thr = $("<tr>");

            var cols = ["", "Code", "Name", "Cost Price", "Sale Price", "Quantity", "Action"];
            for (var col of cols) {
                thr.append($("<th>").text(col))
            }

            thead.append(thr);
            tbl.append(thead);

            var tbody = $("<tbody>");
            if (records.length > 0) {
                for (var record of records) {
                    var tr = $("<tr>").data("id", record.id)

                    var keys = ["checkbox", "code", "name", "cost_price", "sale_price", "quantity", "action"]

                    
                    var action =    `
                                        <div class="d-inline-block text-nowrap">                
                                            <button class="btn" data-bs-toggle="dropdown">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end m-0">
                                                <i class="dropdown-item edit-btn">Edit</i>
                                                <i class="dropdown-item archive-btn">Archive</i>
                                                <i class="dropdown-item delete-btn">Delete</i>
                                            </div>
                                        </div>
                                    `

                    for (var key of keys) {
                        var html = ""
                        if (key == "action") {
                            html = action
                        }
                        else if (key == "checkbox") {
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