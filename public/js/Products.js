$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    })

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
        console.log(id)
        if ($(this).prop('checked')) {
            $(`.${id}-div`).show()
        }
        else {
            $(`.${id}-div`).hide()
        }
    })

    $('.product-form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: `/business/add`,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (res) {
                toastr.success(res.msg);
                // location.href = `/business/product`
            },
            error: function (res) {
                console.log(res)
            }
        });
    })

    var dataTable = $('#example').DataTable({

        buttons: [
            {
                extend: 'csvHtml5',

                titleAttr: 'xlsx',
                title: 'Products List',
                exportOptions: {
                    columns: [1, 2, 3, 4, 5],
                },
                autoFilter: true,
                sheetName: 'Exported data',


            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fa fa-file-text-o"></i> CSV',
                titleAttr: 'pdf',
                title: 'Products List',
                exportOptions: {
                    columns: [1, 2, 3, 4, 5],
                },

                customize: function (doc) {
                    doc.defaultStyle.fontSize = 8;
                    doc.styles.tableHeader.fontSize = 10;
                    doc.content[1].table.widths = ['20%', '20%', '20%', '20%', '20%'];
                    doc.styles.tableHeader.alignment = 'left';
                  
                }
            },
        ],

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
        ],
        sort: false,
        responsive: true,
    });

    $('#printCSV').on('click', function () {
        dataTable.button('.buttons-csv').trigger();
    });
    $('#printPDF').on('click', function () {
        dataTable.button('.buttons-pdf').trigger();
    });

});