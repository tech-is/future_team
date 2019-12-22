// Modal機能
$('.js-modal-open').on('click',function(){
    var parent = $(this).parent(".mail_info");
    var send_data_ul = $(parent).children('ul');
    var send_data_name = (send_data_ul).children('.name');
    var send_data_send = (send_data_ul).children('.send');
    var send_data_message = (send_data_ul).children('.message');
    var send_data_file = (send_data_ul).children('.file');
    var send_data_mail = (send_data_ul).children('.mail');
    console.log(send_data_name);

    $("#modal_info_name").val(send_data_name.text());
    $("#modal_info_send").val(send_data_send.text());
    $("#modal_info_message").val(send_data_message.text());
    $("#modal_info_file").val(send_data_file.text());
    $("#modal_info_mail").val(send_data_mail.text());

    $('.js-modal').fadeIn();
    return false;
});


// Modal閉じる
$('.js-modal-close').on('click',function(){
    $('.js-modal').fadeOut();
    return false;
});

// Mail情報の変更
$('#form').on('submit',function() {
    var csrf_name = $(".token").attr('name'); 
    // viewに生成されたトークンのname取得
    var csrf_hash = $(".token").val(); 
    // viewに生成されたトークンのハッシュ取得
    $.ajax({
        url: "/mypage_ctrl/change",
        type: 'POST',
        data: {
            name: $('#modal_info_name').val(),
            send: $('#modal_info_send').val(),
            message: $('#modal_info_message').val(),
            file: $('#modal_info_file').val(),
            mail: $('#modal_info_mail').val(),
            [csrf_name]: csrf_hash
        }
    }).then(function (data){
    
    });
});





