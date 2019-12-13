<<<<<<< HEAD
    $('#form').on("submit",function(){
        var csrf_name = $("#token").attr('name'); // viewに生成されたトークンのname取得
        var csrf_hash = $("#token").val(); // viewに生成されたトークンのハッシュ取得
        $.ajax({
        url: "/Login_ctrl/login",
=======

    $('#form').on("submit",function(){
        $.ajax({
        url: "/MtoF_login/login",
>>>>>>> master
        type: 'POST',
        data: {
            name: $('#name').val(),
            mail: $('#mail').val(),
            pswd: $('#pswd').val(),
<<<<<<< HEAD
            token: $('#token').val(),
            [csrf_name]: csrf_hash
=======
            token: $('#token').val()
>>>>>>> master
        }
    }).then(function (data){
        console.log(data);
            var ret = JSON.parse(data);
            // var ret = data;
            console.log(ret);
            if(ret['result'] === "success"){
<<<<<<< HEAD
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
                Swal.fire({
                    type:'warning',
                    title:ret['error_match']
            });
=======
                alert(ret['success_message']);
                location.href = "http://mtof.com/MtoF_login";
            }else if(ret['result'] === "error"){
                alert(ret['error_message']);
            }else if(ret['result'] === "not_match"){
                alert(ret['error_match']);
>>>>>>> master
            }
        });
    });
