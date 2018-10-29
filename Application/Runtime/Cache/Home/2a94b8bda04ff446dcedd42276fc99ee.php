<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>博客首页</title>
    <link type="text/css" rel="stylesheet" href="/Myblogs/Public/Home/layui/css/layui.css">
    <link type="text/css" rel="stylesheet" href="/Myblogs/Public/Home/css/style.css">
    <script type="text/javascript" src="/Myblogs/Public/Home/layui/layui.js"></script>
    <script type="text/javascript" src="/Myblogs/Public/JS/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src="js/iframeResizer.js"></script>-->
    <style>
        #frameConter{
            width: 100%;
        }
    </style>
</head>
<body>
<!--header-->
<div id="header" class="layui-row layui-anim layui-anim-scaleSpring">
    <!--博客logo-->
    <div class="layui-col-xs6 logo">
        <h1 class="site-title">
            <a href="index.html">CRQ-我的世界</a>
        </h1>
    </div>
    <!--右边菜单栏部分-->
    <div class="layui-col-xs6">
        <ul class="layui-nav min-width">
            <li class="layui-nav-item layui-this" id="home"><a href="<?php echo U('Home/Index/conter');?>" target="conter">首页</a></li>
            <li class="layui-nav-item">
                <a href="<?php echo U('Home/Tag/index');?>" target="conter">相册</a>
                <dl class="layui-nav-child">
                    <dd><a href="<?php echo U('Home/Tag/index');?>" target="conter">个人时光</a></dd>
                    <dd><a href="javascript:;">个人时光</a></dd>
                    <dd><a href="javascript:;">个人时光</a></dd>
                    <dd><a href="javascript:;">个人时光</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item shou">
                <a>娱乐空间</a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:;">英雄联盟</a></dd>
                    <dd><a href="javascript:;">英雄联盟</a></dd>
                    <dd><a href="javascript:;">英雄联盟</a></dd>
                    <dd><a href="javascript:;">英雄联盟</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a>学习笔记</a>
                <dl class="layui-nav-child">
                    <dd><a href="#">PHP</a></dd>
                    <dd><a href="#">Javascript</a></dd>
                    <dd><a href="#">jQuery</a></dd>
                    <dd><a href="#">HTML</a></dd>
                    <dd><a href="#">CSS</a></dd>
                    <dd><a href="#">LYAUI</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="#">历史文章</a></li>
            <li class="layui-nav-item"><a href="#">关于作者</a></li>
        </ul>
    </div>
    <!--主站轮播部分-->
    <div id="centerbg" class="layui-carousel">
        <div carousel-item="">
            <div><img src="/Myblogs/Public/Home/image/bg/57d8e8d1721dd.jpg"></div>
            <div><img src="/Myblogs/Public/Home/image/bg/57d8e8da68382.jpg"></div>
        </div>
    </div>
</div>

<div id="conter">
    <iframe id="frameConter" frameborder="0" scrolling="no" src="<?php echo U('Home/Index/conter');?>" name="conter" onload="this.height=350"></iframe>
</div>

<div id="footer">
    <div class="site-info">
        <div class="footert-text">
            <i class="layui-icon layui-icon-release"></i>
            <!--<p class="f-color-gray">赣ICP备16012288号 | 2016</p>-->
            <address class="f-color-gray">赣ICP备16012288号 | 2016</address>
        </div>
        <div class="footer-device">
            <i class="layui-icon layui-icon-home"></i>
            <a href="index.html" class="f-color-gray">返回主页</a>
            <i class="layui-icon layui-icon-login-qq"></i>
            <a href="#" class="f-color-gray">联系我</a><br>
            <time id="time" class="f-color-gray"></time>
        </div>
    </div>
</div>

<div id="musicPlay">
    <audio id="musicPlayer" src="/Myblogs/Public/Home/music/藤澤慶昌 - 愛してるばんざーい！ (Piano Mix).mp3"></audio>
    <div class="musicPlay" style="display: none">
        <div class="previous"></div>
        <div class="play"></div>
        <div class="load"></div>
        <div class="next"></div>
        <div class="voice">
        </div>
        <div class="title">
            藤澤慶昌-愛してるばんざーい！
        </div>
    </div>
    <div class="op">
        <i class="layui-icon layui-icon-right"></i>
    </div>
</div>
</body>
</html>
<script>
    // title
    layui.use('element',function () {
        let element = layui.element;
    });


    //轮播
    layui.use(['carousel', 'form'], function(){
        let carousel = layui.carousel
            ,form = layui.form;

        //图片轮播
        carousel.render({
            elem: '#centerbg'
            ,width: '100%'
            ,height: '600px'
            ,interval: 5000
        });
    });

    function showTime() {
        window.setTimeout('showTime()',1000);
        let time = new Date();
        times = time.getFullYear()+'年'+(time.getMonth()+1)+'月'+time.getDate()+'日'
            +time.getHours()+':'+time.getMinutes()+':'+time.getSeconds();
        document.getElementById('time').innerText=times;
    }
    showTime();

    $(function () {
       $('.op').click(function () {
           let num = $('.musicPlay');
           if(num.css('width')=='0px'){
               let width = document.documentElement.clientWidth;
               console.log(width);
               num.animate({width:width-20},1000);
               num.show();
               $(this).children().removeClass('layui-icon-right').addClass('layui-icon-left');
           }else {
               num.animate({width:'0px'},1000);
               setTimeout(() => {num.css('display','none')},1000);
               $(this).children().removeClass('layui-icon-left').addClass('layui-icon-right');
           }
       });

       //音乐事件
        //播放
        let musicPlayer = document.getElementById('musicPlayer');
       $('.musicPlay').on({
           click: function () {
               $('.play').removeClass('play').addClass('pause');
               musicPlayer.play();
           }
       },'.play');
       $('.musicPlay').on({
           click:function () {
               $('.pause').removeClass('pause').addClass('play');
               musicPlayer.pause();
           }
       },'.pause');

       $('.load').click(function () {
               musicPlayer.load();
           });

       // $("#frameConter").load(function(){
       //      var frameConter = $(this);
       //      //获取子页面body的高度 并适量增加
       //      var mainheight = frameConter.contents().find("body").height()+30;
       //      //给iframe设置高度（不低于350）
       //      frameConter.height(Math.max(mainheight,350));
       //  });

        // iframe 自适应高度
        let timer;

        $('#frameConter').on('load',function () {
            if (timer){
                clearInterval(timer);
            }
            let mainheight,pre_height;
            let frameConter = $(this);
            timer = setInterval(function(){
                mainheight = frameConter.contents().find("body").height() + 30;
                if (mainheight != pre_height){
                    pre_height = mainheight;
                    frameConter.height(Math.max(mainheight,350));
                }
            },100);//每0.5秒检查一次
        });

        $('.layui-nav-item').click(function () {
            console.log($(this).attr("id"));
            if(typeof $(this).attr("id") != "undefined"){
                $('#centerbg').slideDown(1000);
            }else {
                $('#centerbg').slideUp(1000);
            }
        });
    });

    //iframe脚本初始化
    // iFrameResize({
    //     log:true,
    //     enablePublicMethods:true,
    // });

</script>