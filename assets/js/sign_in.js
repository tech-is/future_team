
    $('#form').on("submit",function(){
        $.ajax({
        url: "/MtoF_login/login",
        type: 'POST',
        data: {
            name: $('#name').val(),
            mail: $('#mail').val(),
            pswd: $('#pswd').val(),
            token: $('#token').val()
        }
    }).then(function (data){
        console.log(data);
            var ret = JSON.parse(data);
            // var ret = data;
            console.log(ret);
            if(ret['result'] === "success"){
                alert(ret['success_message']);
                location.href = "http://mtof.com/MtoF_login";
            }else if(ret['result'] === "error"){
                alert(ret['error_message']);
            }else if(ret['result'] === "not_match"){
                alert(ret['error_match']);
            }
        });
    });
