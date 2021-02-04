$(function () {

    // 送信確認
    $('#send-btn').on('click', function () {

        // フォームから入力値を取得
        var name = $('#send-name').val();
        var subject = $('#send-subject').val();
        var body = $('#send-body').val();

        // 入力内容の確認
        if (name != "" && subject != "" && body != "") {

            // PHPに送信
            $.ajax({
                type: 'POST',
                url: "./form_ajax.php",
                data: {
                    name: name,
                    subject: subject,
                    body: body
                },
                success: function (data) {
                    if (data.match(/success/)) {
                        alert("送信が完了しました。");
                        location.href = "./login_index"; // 送信後戻り先URL
                    }
                },
                error: function () {
                    alert("予期せぬエラーが発生しました。");
                }
            });
        }
        else {
            alert("キャンセルされました。");
        }
    }		

});