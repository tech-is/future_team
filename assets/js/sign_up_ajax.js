$('#submit_push').on("click",function(){
    $.ajax({
        url: "/MtoF_sign_up/add_information",
        type: 'POST',
        data: {
            name: $('#name').val(),
            mail: $('#mail').val(),
            pswd: $('#pswd').val()
        }
    })
        .then(function (data){
            alert(data);
        })
});