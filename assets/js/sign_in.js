    $('#form').on("submit",function(){
        var csrf_name = $("#token").attr('name'); 
        // viewに生成されたトークンのname取得
        var csrf_hash = $("#token").val(); 
        // viewに生成されたトークンのハッシュ取得
        $.ajax({
        url: "/Login_ctrl/login",
        type: 'POST',
        data: {
            name: $('#name').val(),
            mail: $('#mail').val(),
            pswd: $('#pswd').val(),
            token: $('#token').val(),
            [csrf_name]: csrf_hash
        }
    }).then(function (data){
        console.log(data);
            var ret = JSON.parse(data);
            // var ret = data;
            console.log(ret);
            if(ret['result'] === "success"){
                Swal.fire({
                    type:"success",
                    title:ret['success_message']
                }).then(function(result) {
                    location.href = "http://mtof.com/Login_ctrl";
                });
            }else if(ret['result'] === "error"){
                Swal.fire({
                    type:'warning',
                    title:ret['error_message']
            });
            }else if(ret['result'] === "not_match"){
                $('#error_name').text("");
                $('#error_mail').text("");
                $('#error_pswd').text("");
                // errorの出力
                $('#error_name').text(ret['error_name']);
                $("#error_mail").text(ret['error_mail']);
                $("#error_mail").text(ret['common_mail']);
                $("#error_pswd").text(ret['error_pswd']);
            }
        });
    });
