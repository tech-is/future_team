// Modal機能
$('.js-modal-open').on('click',function(){
    // error文の削除
    $('#error_time').text("");
    $("#error_img").text("");
    $("#error_img").text("");
    $("#error_mail").text("");

    // 編集するメール情報の取得
    var parent = $(this).parent(".mail_info");
    var send_data_ul = $(parent).children('ul');
    var send_data_name = (send_data_ul).children('.name');
    var send_data_send = (send_data_ul).children('.send');
    var send_data_message = (send_data_ul).children('.message');
    var send_data_file = (send_data_ul).children('.file');
    var send_data_mail = (send_data_ul).children('.mail');
    var send_data_id = $(this).next().val();

    $("#modal_info_name").val(send_data_name.text());
    $("#modal_info_send").val(send_data_send.text());
    $("#modal_info_message").val(send_data_message.text());
    // $(".modal_info_file").val(send_data_file.text());
    $("#modal_info_mail").val(send_data_mail.text());
    $("#modal_info_id").val(send_data_id);

    $('.js-modal').fadeIn();
    return false;
});

// Modal閉じる
$('.js-modal-close').on('click',function(){
    $('.js-modal').fadeOut();
    return false;
});

// 選択した画像を表示する
$("#myImage").on('change', function (e) {
    var reader = new FileReader();
    reader.onload = function (e) {
        $("#preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
    console.log(e.target.files[0]);
});

// 

// Mail情報の変更
$('#change').on('click',function() {
    var fd = new FormData($("#form").get(0));
    fd.append('csrf_token', $(".token").val());
    // Ajax送信'
    $.ajax({
        url: "/Mypage_ctrl/change",
        type: "POST",
        data: fd,
        processData: false,
        contentType: false,
        datetype: 'json'
    }).then(function (data){
        var ret = JSON.parse(data);
        if(ret['result'] === "success"){
            Swal.fire({
                type:"success",
                title:ret['success']
            }).then(function(result) {
                location.href = "http://mtof.com/Login_ctrl";
            });
        }else if(ret['result'] === "error"){
            Swal.fire({
                type:'warning',
                title:ret['error']
            });
        }else if(ret['result'] === "not_match"){
            $('#error_time').text("");
            $("#error_img").text("");
            $("#error_img").text("");
            $("#error_mail").text("");
            // errorの出力
            $('#error_time').text(ret['error_time']);
            $("#error_img").text(ret['error_size']);
            $("#error_img").text(ret['error_img']);
            $("#error_mail").text(ret['error_mail']);
        }
    });

    // リセットボタンが押されたときerror文の削除
    $("#reset").on('click',function() {
        $('#error_time').text("");
        $("#error_img").text("");
        $("#error_img").text("");
        $("#error_mail").text("");
    });
});





