<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>conter</title>
    <link type="text/css" rel="stylesheet" href="/myblogs/Public/Home/layui/css/layui.css">
    <link type="text/css" rel="stylesheet" href="/myblogs/Public/Home/css/style.css">
    <script type="text/javascript" src="/myblogs/Public/Home/layui/layui.js"></script>
    <script type="text/javascript" src="/myblogs/Public/JS/jquery-3.3.1.min.js"></script>
</head>
<body>
<div id="conter">
    <div class="conter-area">
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px">
            <legend>最新发布</legend>
        </fieldset>
        <div class="post post-list">
            <ul>
                <li>
                    <div class="p-image">
                        <a href="#">
                            <i class="layui-icon layui-icon-read p-icon"></i>
                        </a>
                    </div>
                    <div class="page">
                        <h3 class="page-title">CSS语法（一）</h3>
                        <p>通过本次实验首先是让学生了解动态规划算法的实现过程，其次通过实践编码运行更深入理解算法的执行过程，最后是通过实例理解最优解和最优值的关系。同时，希望通过实验课上的实际操作......</p>
                        <div class="page-time">
                            <i class="layui-icon layui-icon-log"></i>
                            发布于 2018-10-24
                        </div>
                    </div>
                    <div class="page-more">
                        <a href="#">
                            <i class="layui-icon layui-icon-more"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <hr class="layui-bg-gray">
        </div>
        <div class="post post-list">
            <ul>
                <li>
                    <div class="p-image">
                        <a href="#">
                            <i class="layui-icon layui-icon-read p-icon"></i>
                        </a>
                    </div>
                    <div class="page">
                        <h3 class="page-title">CSS语法（一）</h3>
                        <p>通过本次实验首先是让学生了解动态规划算法的实现过程，其次通过实践编码运行更深入理解算法的执行过程，最后是通过实例理解最优解和最优值的关系。同时，希望通过实验课上的实际操作......</p>
                        <div class="page-time">
                            <i class="layui-icon layui-icon-log"></i>
                            发布于 2018-10-24
                        </div>
                    </div>
                    <div class="page-more">
                        <a href="#">
                            <i class="layui-icon layui-icon-more"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <hr class="layui-bg-gray">
        </div>
        <div class="post post-list">
            <ul>
                <li>
                    <div class="p-image">
                        <a href="#">
                            <i class="layui-icon layui-icon-read p-icon"></i>
                        </a>
                    </div>
                    <div class="page">
                        <h3 class="page-title">CSS语法（一）</h3>
                        <p>通过本次实验首先是让学生了解动态规划算法的实现过程，其次通过实践编码运行更深入理解算法的执行过程，最后是通过实例理解最优解和最优值的关系。同时，希望通过实验课上的实际操作......</p>
                        <div class="page-time">
                            <i class="layui-icon layui-icon-log"></i>
                            发布于 2018-10-24
                        </div>
                    </div>
                    <div class="page-more">
                        <a href="#">
                            <i class="layui-icon layui-icon-more"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <hr class="layui-bg-gray">
        </div>
        <div class="post post-list">
            <ul>
                <li>
                    <div class="p-image">
                        <a href="#">
                            <i class="layui-icon layui-icon-read p-icon"></i>
                        </a>
                    </div>
                    <div class="page">
                        <h3 class="page-title">CSS语法（一）</h3>
                        <p>通过本次实验首先是让学生了解动态规划算法的实现过程，其次通过实践编码运行更深入理解算法的执行过程，最后是通过实例理解最优解和最优值的关系。同时，希望通过实验课上的实际操作......</p>
                        <div class="page-time">
                            <i class="layui-icon layui-icon-log"></i>
                            发布于 2018-10-24
                        </div>
                    </div>
                    <div class="page-more">
                        <a href="#">
                            <i class="layui-icon layui-icon-more"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <hr class="layui-bg-gray">
        </div>
        <div class="post post-list">
            <ul>
                <li>
                    <div class="p-image">
                        <a href="#">
                            <i class="layui-icon layui-icon-read p-icon"></i>
                        </a>
                    </div>
                    <div class="page">
                        <h3 class="page-title">CSS语法（一）</h3>
                        <p>通过本次实验首先是让学生了解动态规划算法的实现过程，其次通过实践编码运行更深入理解算法的执行过程，最后是通过实例理解最优解和最优值的关系。同时，希望通过实验课上的实际操作......</p>
                        <div class="page-time">
                            <i class="layui-icon layui-icon-log"></i>
                            发布于 2018-10-24
                        </div>
                    </div>
                    <div class="page-more">
                        <a href="#">
                            <i class="layui-icon layui-icon-more"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <hr class="layui-bg-gray">
        </div>
        <div class="more">
            <button class="layui-btn layui-btn-primary layui-btn-radius" >查看更多</button>
        </div>
    </div>
</div>
</body>
</html>
<script>
    $('.more').click(function () {
        // alert('添加更多');
        $(this).before('        <div class="post post-list">\n' +
            '            <ul>\n' +
            '                <li>\n' +
            '                    <div class="p-image">\n' +
            '                        <a href="#">\n' +
            '                            <i class="layui-icon layui-icon-read p-icon"></i>\n' +
            '                        </a>\n' +
            '                    </div>\n' +
            '                    <div class="page">\n' +
            '                        <h3 class="page-title">CSS语法（一）</h3>\n' +
            '                        <p>通过本次实验首先是让学生了解动态规划算法的实现过程，其次通过实践编码运行更深入理解算法的执行过程，最后是通过实例理解最优解和最优值的关系。同时，希望通过实验课上的实际操作......</p>\n' +
            '                        <div class="page-time">\n' +
            '                            <i class="layui-icon layui-icon-log"></i>\n' +
            '                            发布于 2018-10-24\n' +
            '                        </div>\n' +
            '                    </div>\n' +
            '                    <div class="page-more">\n' +
            '                        <a href="#">\n' +
            '                            <i class="layui-icon layui-icon-more"></i>\n' +
            '                        </a>\n' +
            '                    </div>\n' +
            '                </li>\n' +
            '            </ul>\n' +
            '            <hr class="layui-bg-gray">\n' +
            '        </div>');
    });
</script>