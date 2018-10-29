function login(url,data) {
    $.ajax({
        url:url,
        type:'post',
        dataType:'json',
        date:data,
        // success:function (data) {
        //     if(data){
        //         window.location.href="{:U('Admin/Index/index')}";
        //     }else {
        //         alert('账号或密码错误');
        //     }
        // }
        success:function (msg) {
            if(msg){
                alert(msg.ID);
                // window.location.href=URL;
            }
        },
        error:function (msg) {
            msg.exception();
        }
    });
}