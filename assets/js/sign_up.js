// ajaxの実装
$('#submit_push').on("submit",function(){
    var csrf_name = $("#token").attr('name'); // viewに生成されたトークンのname取得
    var csrf_hash = $("#token").val(); // viewに生成されたトークンのハッシュ取得
    $.ajax({
        url: "/Sign_up_ctrl/add_information",
        type: 'POST',
        data: {
            name: $('#name').val(),
            mail: $('#mail').val(),
            pswd: $('#pswd').val(),
            check_pswd: $('#check_pswd').val(),
            token: $('#token').val(),
            [csrf_name]: csrf_hash
        }
    }).then(function (data){
        var ret = JSON.parse(data);
        if(ret['result'] === "success"){
            Swal.fire({
                type:"success",
                title:ret['success_message']
            }).then(function(result) {
                location.href = "/";
            });
        }else if(ret['result'] === "error"){
            Swal.fire({
                type:'warning',
                title:ret['error_message']
            });
        }else if(ret['result'] === "not_match"){
            Swal.fire({
                type:'warning',
                title:ret['error_match']
            });
        }
    });
});

$(function(){
    // console.log('hello');
    $("#check_pswd").keyup(function(){
        var pswd = $("#pswd").val();
        var check_pswd = $("#check_pswd").val();
        // 入力情報の比較
        if(pswd === check_pswd){
            // ボタンを押せるようにする
            $('#submit_push').prop('disabled', false);
            $('.check_color').addClass('color_green');
        }else{
            // 送信ボタンを押させない
            $('.check_color').removeClass('color_green');
            $('#submit_push').prop('disabled', true);
        }
    });
});
    // POST_FLAG = false;

// function DoubleClick(form)
// {
//     if (! POST_FLAG) {
//         POST_FLAG = true;
        
//         setTimeout((disabled) => {
//             POST_FLAG = false;
//         }, 1000);
//         return true;
//     } else {
//         return false;
//     }
// }

// function CheckPassword(input)
// {
//     console.log('接続完了');
//     // 入力情報の取得
//     var pswd = document.getElementById("pswd").value;
//     var check_pswd = input.value;
    
//     // 入力情報の比較
//     if(pswd !== check_pswd){
//         input.setCustomValidity("入力値が一致しません。");
//     }else{
//         input.setCustomValidity("");
//     }
// }
