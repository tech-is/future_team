// 添付ファイルフォーム
$('.custom-file-input').on('change',function(){
    $(this).next('.custom-file-label').html($(this)[0].files[0].name);
});

$( '#submit' ).on( 'click', function() {
    // HTML通信を中断
    event.preventDefault();

    // form 要素を取得
    var form_data = $('form').serializeArray();

    // 
    
    // Ajaxで送信
    alert('aaa');
    console.log(form_data);
});


// (click( function () {

//     var form_data = $('form').serialize();

//     console.log(form_data);

//     $.ajax({
//             url: "",  //POST送信を行うファイル名を指定
//             type: "POST",
//             data: form_data,  //POST送信するデータを指定（{ 'hoge': 'hoge' }のように連想配列で直接書いてもOK）
//             timeout: 10000,
//             success: function(data){
//                 alert( "Data Saved: ");
//             }
//     });
// });
