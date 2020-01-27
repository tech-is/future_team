// 写真の表示
$('#myImage').on('change', function (e) {
    var reader = new FileReader();
    reader.onload = function (e) {
        $("#preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
});


$('form').on("submit",function () {
    // 二重送信防止
    // $(this).find(':submit').prop('disabled', 'true');
    // formデータ獲得
    var fd = new FormData($(this).get(0));
    fd.append('csrf_token', $("#token").val());
    // Ajax送信'
    $.ajax({
        url: "/Form_ctrl/mtof",
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
});