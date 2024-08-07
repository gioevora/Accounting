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

});