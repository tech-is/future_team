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
