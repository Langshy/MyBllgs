<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tag</title>
    <link type="text/css" rel="stylesheet" href="/mybllgs/Public/Home/layui/css/layui.css">
    <link type="text/css" rel="stylesheet" href="/mybllgs/Public/Home/css/style.css">
    <link type="text/css" rel="stylesheet" href="/mybllgs/Public/Home/css/archives.css">
    <script type="text/javascript" src="/mybllgs/Public/Home/layui/layui.js"></script>
    <script type="text/javascript" src="/mybllgs/Public/JS//jquery-3.3.1.min.js"></script>
</head>
<body>
<div id="tag">
    <div class="tag">
        <div class="tag-icon"><img src="/mybllgs/Public/Home/image/archives/tag.png"></div>
        <div class="tag-title">PHP</div>
    </div>
    <div class="archives">
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
    </div>
    <div id="paging"></div>
</div>
</body>
</html>
<script>
    layui.use(['laypage', 'layer'], function() {
        let laypage = layui.laypage
            , layer = layui.layer;
        //完整功能
        laypage.render({
            elem: 'paging'
            ,
            // 设置页数
            count: 20
            ,layout: ['count', 'prev', 'page', 'next', 'limit', 'refresh', 'skip']
            ,jump: function(obj){
                // 获取页数
                console.log(obj)
            }
        });
    });
</script>