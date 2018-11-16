function login(url,data) {
    $.ajax({
        url:url,
        type:"POST",
        date:data,
        success:function (msg) {
           return msg;
        },
        error:function (msg) {
            msg.exception();
        }
    });
}