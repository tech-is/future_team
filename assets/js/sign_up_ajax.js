$('#submit_push').on("submit",function(){
    $.ajax({
        url: "/MtoF_sign_up/add_information",
        type: 'POST',
        data: {
            name: $('#name').val(),
            mail: $('#mail').val(),
            pswd: $('#pswd').val(),
            token: $('#token').val()
        }
    }).then(function (data){
        var ret = JSON.parse(data);
        if(ret['result'] === "success"){
            alert(ret['success_message']);
            location.href = "/";
        }else if(ret['result'] === "error"){
            alert(ret['error_message']);
        }else if(ret['result'] === "not_match"){
            alert(ret['error_match']);
            location.href = "/MtoF_sign_up";
        }
    });
});

    