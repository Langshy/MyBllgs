<?php if (!defined('THINK_PATH')) exit(); session_start(); session_destroy(); ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员登录</title>
    <link type="text/css" rel="stylesheet" href="/Myblogs/Public/Admin/css/login/style.css">
    <link type="text/css" rel="stylesheet" href="/Myblogs/Public/Admin/css/main.css">
    <script type="text/javascript" src="/Myblogs/Public/JS/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/Myblogs/Public/JS/function.js"></script>
    <script type="text/javascript">
    </script>
</head>
<body>
<div id="content">
    <img src="/Myblogs/Public/Admin/image/bg.jpg" width="100%">
    <div class="login">
        <div class="title">News</div>
        <div class="login_content">
            <form method="post" action="">
                <ul>
                    <li>用户名或电子邮件地址：</li>
                    <li><input type="text" name="ID" id="ID" class="input"></li>
                    <li>密码：</li>
                    <li><input type="password" name="password" id="password" class="input"></li>
                    <li><input type="checkbox" value="click">记住登录信息</li>
                    <li><button class="button">登录</button></li>
                </ul>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
    $(function () {
       $('.button').click(function () {
               let ID = $('#ID').val();
               let passwd = $('#password').val();
               let data = {ID:ID,passwd:passwd};
               let url = "<?php echo U('Admin/Login/loginAction');?>";
               login(url,data);
           });
    });
</script>