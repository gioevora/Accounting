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
        else{
            bool = false
            $('.inventory-categ').hide()
        }

        $('#purchase').prop('checked', bool)
        $('#purchase').attr('disabled', bool)
        $('#sell').prop('checked', bool)
        $('#sell').attr('disabled', bool)
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
            'print', 'copy', 'csv', 'pdf',

            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [1, 2,]
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

    $('#printCSV').on('click', function() {
        dataTable.button('.buttons-csv').trigger();
    });

});