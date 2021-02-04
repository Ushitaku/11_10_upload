$(function () {
    $('#next').click(function () {

        $.ajax({
            url: "form_ajax.php",
            type: "post",
            dataType: "text",
            data: {
                'username': $('#username').val(), 'email': $('#email').val(),
                'title': $('#title').val(), 'content': $('#content').val()
            }

        }).done(function (response) {
            alert("success");
            var array = JSON.parse(response);
        }).fail(function (xhr, textStatus, errorThrown) {
            alert('error');
        });
    });
});