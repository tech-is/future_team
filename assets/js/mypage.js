// 削除機能
$(".delete").on("click",function() {
    // 削除ボタンが押された部分のidを取得
    var idName =  $(this).val(); 
    // SweetAlert2
    Swal.fire({
        title: '本当に削除されますか？',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
    }).then((result) => {
        if (result.value) {
            // viewに生成されたトークンのname取得
            var csrf_name = $(".token").attr('name'); 
            // viewに生成されたトークンのハッシュ取得
            var csrf_hash = $(".token").val(); 
            
            $.ajax({
                url: '/mypage_ctrl/delete',
                type: 'POST',
                data: {
                    delete_id: idName,
                    [csrf_name]: csrf_hash
                }
            }).then(function (data){
                Swal.fire(
                    '削除完了',
                    '',
                    'success'
                    ).then(function(result) {
                        location.href = "http://mtof.com/Login_ctrl";
                    });
            });
        }
    });
});

// ログアウト機能
$('#logout').on('click',function() {
    Swal.fire({
        title: 'ログアウトされますか？',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
    }).then((result) => {
        if (result.value) {
            // viewに生成されたトークンのname取得
            var csrf_name = $(".token").attr('name'); 
            // viewに生成されたトークンのハッシュ取得
            var csrf_hash = $(".token").val(); 
            $.ajax({
                url: '/mypage_ctrl/logout',
                type: 'POST',
                data: {
                    [csrf_name]: csrf_hash
                }
            }).then(function (data){
                Swal.fire(
                    'ログアウト完了',
                    '',
                    'success'
                    ).then(function(result) {
                        location.href = "http://mtof.com/mypage_ctrl/logout";
                    });
            });
        }
    });
});
