$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    })

    

    $('.create-form').on('submit', function (e) {
        e.preventDefault();
        console.log($(this).serialize())
        $.ajax({
            url: `/bank/add`,
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

})