<?php 
include('php/identify.php');

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $website;?>后台管理系统</title>
	
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./css/font.css">
	<link rel="stylesheet" href="./css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="./lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/xadmin.js"></script>

</head>
<body>
    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo"><a href="./index.php"><?php echo $website;?>后台管理系统</a></div>
        <div class="left_open">
            <i title="展开左侧栏" class="iconfont">&#xe699;</i>
        </div>
        <ul class="layui-nav left fast-add" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">上传</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                <dd><a onclick="x_admin_show('添加新闻','php/add/news_add.php',1200,810)"><i class="iconfont">&#xe6fc;</i>新闻</a></dd>           
                <dd><a onclick="x_admin_show('添加产品','php/add/product_add.php',850,650)"><i class="iconfont">&#xe6a8;</i>产品</a></dd>
                <dd><a onclick="x_admin_show('添加友情链接','php/add/link_add.php',600,260)"><i class="iconfont">&#xe6fc;</i>友情链接</a></dd> 
            </dl>
          </li>
        </ul>
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">管理员</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a onclick="x_admin_show('个人信息','php/welcome.php',800,600)">个人信息</a></dd>
              <dd><a href="logout.php">退出</a></dd>
            </dl>
          </li>
          <li class="layui-nav-item to-index"><a href="../index.php">前台首页</a></li>
        </ul>
        
    </div>
    <!-- 顶部结束 -->
    <!-- 中部开始 -->
     <!-- 左侧菜单开始 -->
    <div class="left-nav">
      <div id="side-nav">
        <ul id="nav">
<!--
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe723;</i>
                    <cite>内容管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="website_info.php">
                            <i class="iconfont">&#xe6a4;</i>
                            <cite>网站信息</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="product_list.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>头部导航</cite>
                        </a>
                    </li >

                    <li>
                        <a href="javascript:;">
                            <i class="iconfont">&#xe69e;</i>
                            <cite>页面文本</cite>
                            <i class="iconfont nav_right">&#xe697;</i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a _href="xxx.html">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>index/首页</cite>
                                    
                                </a>
                            </li >
                            <li>
                                <a _href="xx.html">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>about/品牌介绍</cite>
                                    
                                </a>
                            </li>
                            <li>
                                <a _href="xx.html">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>join/加盟介绍</cite>
                                    
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                </ul>
            </li>
-->
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6a8;</i>
                    <cite>图片管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="img_slider_list.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>主页轮播图片</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="img_product_class_list.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>产品类别图片</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="img_banner_list.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>网页banner图片</cite>
                        </a>
                    </li >
                </ul>
            </li>
            
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6fb;</i>
                    <cite>新闻管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="news_list.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>新闻列表</cite>
                        </a>
                    </li >
                </ul>
            </li>

            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe723;</i>
                    <cite>产品管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="product_list.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>产品列表</cite>
                        </a>
                    </li >
                </ul>
            </li>

            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe723;</i>
                    <cite>页面管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="page_list.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>页面信息</cite>
                        </a>
                    </li >                    
                    <li>
                        <a _href="link_list.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>友情链接</cite>
                        </a>
                    </li >
                </ul>
            </li>            
           
            
        </ul>
      </div>
    </div>
    <!-- <div class="x-slide_left"></div> -->
    <!-- 左侧菜单结束 -->
    <!-- 右侧主体开始 -->
    <div class="page-content">
        <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
          <ul class="layui-tab-title">
            <li class="home"><i class="layui-icon">&#xe68e;</i>我的桌面</li>
          </ul>
          <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <iframe src='php/welcome.php' frameborder="0" scrolling="yes" class="x-iframe"></iframe>
            </div>
          </div>
        </div>
    </div>
    <div class="page-content-bg"></div>
    <!-- 右侧主体结束 -->
    <!-- 中部结束 -->
    <!-- 底部开始 -->
    <div class="footer">
        <div class="copyright">Copyright ©2018 Linray Group All Rights Reserved</div>  
    </div>
    <!-- 底部结束 -->
</body>
</html>