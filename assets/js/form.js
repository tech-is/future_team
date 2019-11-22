// 添付ファイルフォーム
$('.custom-file-input').on('change', function () {
    $(this).next('.custom-file-label').html($(this)[0].files[0].name);
});

$('form').submit(function () {
    // HTML通信を中断
    event.preventDefault();

    // 多重送信対策
    var submit_button = $('#submit');
    submit_button.attr("disabled", true);

    // form 要素を取得
    var form_data = $(this).serializeArray();

    // console.log(form_data);

    // Ajax送信
    $.ajax({
        url: "form_ctrl/get_post",
        type: "POST",
        data: form_data,
        contentType: 'application/json',
        dataType: "json",
        timeout: 10000,
    })
    .done(function (form_data) {
        alert('done');
        alert(form_data);
    })
    .fail(function () {
        alert("Server Error. Pleasy try again later.");
    })
    .always(function () {
        submit_button.attr("disabled", false);
    });
});