<?php /* Smarty version Smarty-3.1.6, created on 2016-05-04 12:20:48
         compiled from "./Application/Home/View/Public/head.html" */ ?>
<?php /*%%SmartyHeaderCode:1682890115572978a0e62769-94439157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9c8545717d6f1b1351f541360a8e3930371b43e' => 
    array (
      0 => './Application/Home/View/Public/head.html',
      1 => 1460687983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1682890115572978a0e62769-94439157',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_572978a1031de',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572978a1031de')) {function content_572978a1031de($_smarty_tpl) {?><script type="text/javascript">
	//左侧通用导航栏
	$(function(){
		$(window).scroll(function(){
			//获取个人中心的top位置
			var ptop = $("#person_menu").css("top");
			//改变头的位置和透明度
			$("#header .h_top").css({ position:"relative", top:$(window.scrollTop()+"px"});
			if($(window).scrollTop()>1){
				$("#header .h_top").css({ opacity:"0.7", filter:"Alpha(opacity=70)"});
			} else {
				$("#header .h_top").css({ opacity:"1", filter:"Alpha(opacity=100)"});
			}

			//动态改变个人中心的位置
			if($(window).scrollTop()>100){
				$("#person_menu").css({ top:$(window).scrollTop()+60+"px"});
			} else {
                $("#person_menu").css({ top:ptop});
			}
		})
	});
</script>
<script type="text/javascript" src="__PUBLIC__/front/js/totop.js"></script>
<script type="text/javascript" src="__PUBLIC__/front/js/thickbox_plus.js"></script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/front/css/thickbox.css"/>
<!-- head页头部分开始-->
<div id="header">
    <div class="h_top">
        <div class="con">
            <ul class="left">
                <li><a href="__APP__/Index/index" class="title">笃 学 力 行 守 正 求 新</a></li>
            </ul>
            <ul class="right">
                <?php if (empty($_SESSION['loginuser'])){?>
                <li class="disuser"><a href="__APP__/Login/ShowLogin.html?height=245;width=600" class="thickbox"  title="登录">登录</a></li>
                <li><a href="__APP__/Register/register">注册</a></li>
                <?php }else{ ?>
                <li class="disuser"><a href="__APP__/User/index/uid/<?php echo $_SESSION['loginuser']['id'];?>
" style="color:#fff;"><?php echo $_SESSION['loginuser']['username'];?>
</a></li>
                <li><a href="__APP__/Login/loginout">退出</a></li>
                <?php }?>
            </ul>
        </div>
    </div>
    <!--搜索logo-->
    <div class="h_center">
        <div class="con">
            <div class="logo">
                <a href="__APP__/Index/index"><span>LanceLot</span></a>
            </div>
            <div class="search">
                <form action="__APP__/Index/search" method="post">
                    <input type="text" class="inp" placeholder="电影、分类" style="font-size: 12px;padding-left: 5px;" name="key" />
                    <input type="submit" class="sub" value="">
                </form>
            </div>
            <div class="logoimg">
                <img src="__PUBLIC__/front/images/logo.jqg" alt=""/>
            </div>
        </div>
    </div>
    <!--menu菜单-->
    <div class="h_down">
        <div class="menu">
            <ul>
                <li><a href="__APP__/Index/index">首页</a></li>
                <li><a href="__APP__/News/news">影讯</a></li>
                <li><a href="__APP__/List/movielist">评分榜</a></li>
                <li><a href="__APP__/List/index">影评</a></li>
                <li><a href="__APP__/Typelist/index">分类</a></li>
                <li><a href="__APP__/Prevue/index">预告片</a></li>
            </ul>
        </div>
    </div>
</div>
    <!--header页头部分结束-->

     <div class="nav"></div>

    <!--个人中心菜单开始-->
    <script type="text/javascript">
        //个人中心滑动特效
        $(function(){
            $("#person_menu ul li").each(function(){
                if(this.className.indexOf("current_page")==-1){
                    var color;
                    $(this).find('a').css({ left:"-90px", opacity:"0.6"});
                    $(this).hover(function(){
                        $(this).find('a').animate({ left:"0px", opacity:"1"}, "normal");
                    },function(){
                        $(this).find('a').animate({ left:"-90px",opacity:"0.6"}, "normal");
                    });
                }
            });
        });
        //点击个人中心进行判断
         function personCheckLogin(){
             var uid = "<?php echo $_SESSION['loginuser']['id'];?>
";
             if(uid.length>0){
                 window.location = "__APP__/Index/index/id/"+uid;
             } else {
                 alert_display_block("你还没有登录!");
             }
         }
    </script>
    <div id="person_menu">
        <ul>
            <li class="nav0 current_page"><a href="javascript:personCheckLogin();">个人中心</a></li>
            <li class="nav1"><a title="首页" href="__APP__/Index/index">首页</a></li>
            <li class="nav2"><a title="影讯" href="__APP__/News/news">影讯</a></li>
            <li class="nav3"><a title="评分榜" href="__APP__/List/movielist">评分榜</a></li>
            <li class="nav4"><a title="影评" href="__APP__/List/index">影评</a></li>
            <li class="nav5"><a title="分类" href="__APP__/Typelist/index">分类</a></li>
            <li class="nav6"><a title="预告片" href="__APP__/Prevue/index">预告片</a></li>
            <li class="nav7"><a title="网站地图" href="__APP__/Map/map">网站地图s</a></li>
        </ul>
    </div>
    <!--个人中心提示菜单结束-->

    <!--弹出提示框-->
    <div id="define_my_alert_bg"></div>
    <div id="define_my_alert">
        <div class="close"></div>
        <div class="alert_msg">
            我是弹框提示信息
        </div>
    </div>
    <script type="text/javascript">
        //弹框js
        //点击弹出div层
        function alert_display_block(msg){
            var aw = ($(window).outerWidth() - $("#define_my_alert").width()) / 2;
            var ah = ($(window).outerHeight() - $("#define_my_alert").height()) / 2;
            //输入内容
            $("#define_my_alert .alert_msg").html(msg);
            $("#define_my_alert_bg").fadeIn("fast");
            $("#define_my_alert").fadeIn("fast").css({ top:$(window).scrollTop()+ah+"px",left: aw+"px"});
        }

        //点击关闭隐藏div层
        $("#define_my_alert .close").click(function(){
            $("#define_my_alert_bg").fadeOut("fast");
            $("#define_my_alert").fadeOut("fast");
        });

        var aw = ($(window).outerWidth() - $("#define_my_alert").width()) / 2;
        var ah = ($(window).outerHeight() - $("#define_my_alert").height()) / 2;
        //滚动窗口时跟随滚动
        $(window).scroll(function(){
            $("#define_my_alert_bg").css({ top:$(window).scrollTop()+"px"});
            $("#define_my_alert").css({ top:$(window).scrollTop()+ah+"px"});
        });
    </script>

<?php }} ?>