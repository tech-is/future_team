// 添付ファイルフォーム
$('.custom-file-input').on('change', function () {
    $(this).next('.custom-file-label').html($(this)[0].files[0].name);
});

// 写真の表示
$('#myImage').on('change', function (e) {
    console.log(e);
    var reader = new FileReader();
    reader.onload = function (e) {
        $("#preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
});


$('form').submit(function () {
    // HTML通信を中断
    event.preventDefault();

    // 多重送信対策
    var submit_button = $('#submit');
    submit_button.attr("disabled", true);

    // form 要素を取得
    var form_data = $(this).serializeArray();

    console.log(form_data);

    // Ajax送信
    $.ajax({
        url: "form_ctrl/mtof",
        type: "POST",
        data: {
            time : $('time').val(),
            send_name : $('send_name').val(),
            message : $('message').val(),
            myImage : $('myImage').val(),
            mail : $('mail').val()
        },
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