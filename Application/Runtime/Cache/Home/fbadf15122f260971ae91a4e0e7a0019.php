<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>LanceLot</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="/Lancelot/Public/front/css/style.css" rel="stylesheet" type="text/css"/>
		<link href="/Lancelot/Public/front/css/public.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="/Lancelot/Public/front/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="/Lancelot/Public/front/js/move.js"></script>
	</head>
	<body>
		<!-- 个人中心菜单结束 -->
		<script type="text/javascript">
	//左侧通用导航栏
	$(function(){
		$(window).scroll(function(){
			//获取个人中心的top位置
			var ptop = $("#person_menu").css("top");
			//改变头的位置和透明度
			$("#header .h_top").css({ position:"relative", top:$(window).scrollTop()+"px"});
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
<script type="text/javascript" src="/Lancelot/Public/front/js/totop.js"></script>
<script type="text/javascript" src="/Lancelot/Public/front/js/thickbox_plus.js"></script>
<link rel="stylesheet" type="text/css" href="/Lancelot/Public/front/css/thickbox.css"/>
<!-- head页头部分开始-->
<div id="header">
    <div class="h_top">
        <div class="con">
            <ul class="left">
                <li><a href="/Lancelot/index.php/Index/index" class="title"></a></li>
            </ul>
            <ul class="right">
                <?php if(empty($_SESSION['loginuser'])): ?><li class="disuser"><a href="/Lancelot/index.php/Login/ShowLogin.html?height=245;width=600" style="border-radius:0px 0px 0px 10px" class="thickbox"  title="登录">登录</a></li>
                <li><a href="/Lancelot/index.php/Register/register" style="border-radius:0px 0px 10px 0px">注册</a></li>
                <?php else: ?>
                <li class="disuser"><a href="/Lancelot/index.php/User/index/uid/<?php echo ($_SESSION['loginuser']['id']); ?>" style="color:#fff;border-radius:0px 0px 0px 10px"><?php echo ($_SESSION['loginuser']['username']); ?></a></li>
                <li><a href="/Lancelot/index.php/Login/loginout" style="border-radius:0px 0px 10px 0px">退出</a></li><?php endif; ?>
            </ul>
        </div>
    </div>
    <!--搜索logo-->
    <div class="h_center">
        <div class="con">
            <div class="logo">
                <a href="/Lancelot/index.php/Index/index"><span>LanceLot</span></a>
            </div>
            <div class="search">
                <form action="/Lancelot/index.php/Index/search" method="post">
                    <input type="text" class="inp" placeholder="电影、分类" style="font-size: 12px;padding-left: 13px;" name="key" />
                    <input type="submit" class="sub" value="" />
                </form>
            </div>
        </div>
    </div>
    <!--menu菜单-->
    <div class="h_down">
        <div class="menu">
            <ul>
                <li><a href="/Lancelot/index.php/Index/index">首页</a></li>
                <li><a href="/Lancelot/index.php/News/news">影讯</a></li>
                <li><a href="/Lancelot/index.php/List/movielist">评分榜</a></li>
                <li><a href="/Lancelot/index.php/List/index">影评</a></li>
                <li><a href="/Lancelot/index.php/Typelist/index">分类</a></li>
                <li><a href="/Lancelot/index.php/Prevue/index">预告片</a></li>
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
             var uid = "<?php echo ($_SESSION['loginuser']['id']); ?>";
             if(uid.length>0){
                 window.location = "/Lancelot/index.php/User/index/id/"+uid;
             } else {
                 alert_display_block("你还没有登录!");
             }
         }
    </script>
    <div id="person_menu">
        <ul>
            <li class="nav0 current_page"><a href="javascript:personCheckLogin();">个人中心</a></li>
            <li class="nav1"><a title="首页" href="/Lancelot/index.php/Index/index">首页</a></li>
            <li class="nav2"><a title="影讯" href="/Lancelot/index.php/News/news">影讯</a></li>
            <li class="nav3"><a title="评分榜" href="/Lancelot/index.php/List/movielist">评分榜</a></li>
            <li class="nav4"><a title="影评" href="/Lancelot/index.php/List/index">影评</a></li>
            <li class="nav5"><a title="分类" href="/Lancelot/index.php/Typelist/index">分类</a></li>
            <li class="nav6"><a title="预告片" href="/Lancelot/index.php/Prevue/index">预告片</a></li>
            <li class="nav7"><a title="网站地图" href="/Lancelot/index.php/Map/map">网站地图</a></li>
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


		<!-- 个人中心菜单结束 -->
		
		<!-- 主体部分开始	-->
		<div id="main">
		
			<!-- 左侧内容 -->
			<div id="main_left">
				<div class="list_title">
					<?php echo ($toptitle); ?>的影评
				</div>
				<?php if($display == 'block'): ?><div class="list_title_down">
					<a href="/Lancelot/index.php/List/index/order/ptime">最新发表的影评</a>
					<a href="/Lancelot/index.php/List/index/order/rnum">最受欢迎的影评</a>
				</div>
				<?php else: endif; ?>
				<div class="nav"></div>
				<!-- 最受欢迎的影评 -->
				<div class="movie_review">
					<?php if(isset($list)): if(is_array($list)): foreach($list as $key=>$v): ?><div class="review_list">
						<div class="rl">
							<a href="/Lancelot/index.php/Detail/index/id/<?php echo ($v["fid"]); ?>"><img src="/Lancelot/Uploads/Movie/Cover/b_<?php echo ($v["picname"]); ?>" alt="<?php echo ($v["filmname"]); ?>" /></a>
						</div>
						<div class="rr">
							<div class="title">
								<a href="/Lancelot/index.php/Review/index/id/<?php echo ($v["id"]); ?>">
								<?php echo ($v["title"]); ?>
								</a> 
							</div>
							<div class="acthor">
								<?php echo ($v["username"]); ?> 评论: <a href="/Lancelot/index.php/Detail/index/id/<?php echo ($v["fid"]); ?>">《<?php echo ($v["filmname"]); ?>》 </a>
							</div>
							<div class="content">
								<?php echo ($v["content"]); ?>
							</div>
							
							<!--  如果是影片列表打开评分选项 -->
							<!-- 
							<div class="point">
								<span>综合评分：7.7</span><a href="">(176人回复)</a>
							</div> 
							-->
						</div>
					</div><?php endforeach; endif; ?>
					<div class="review_list_page" style=""><?php echo ($pageshow); ?></div>
					<?php else: ?>
					<div class="nobody">
						还没有影评哦,快去发表一篇吧！！！
					</div><?php endif; ?>
				</div>
				
			</div>
			
			<!-- 右侧内容 -->
			<div id="main_right">
				<!-- 右侧经典台词 -->
				<div class="movie_word">
					<div class="word_title">
						经典台词
					</div>
					<div class="word_con">
						<p><?php echo ($dialogue["en_dialogue"]); ?></p>
						<p><?php echo ($dialogue["cn_dialogue"]); ?></p>
					</div>
					<div class="source">
						《<?php echo ($dialogue["source"]); ?>》
					</div>
				</div>
				<div class="nav"></div>
				<div class='ad'>
					<img src="/Lancelot/Public/front/images/ad2.jpg" alt="" />
				</div>
				<div class="nav"></div>	
				<!-- 友情链接 -->
				<div class="movie_link">
					<div class="link_head">
						<span>友情链接</span>
					</div>
					<div class="link_list">
						<ul>
							<?php if(is_array($link)): foreach($link as $key=>$l): ?><li><a href="<?php echo ($l["url"]); ?>"><img src="/Lancelot/Uploads/News/mypic/c_<?php echo ($l["picname"]); ?>"/></a></li><?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
				<div class="nav"></div>
			</div>
		</div>
		<!-- 主体部分结束	-->	
		<div class="nav"></div>		

		<!-- 页脚部分开始 -->
		    <div id="footer">
        <div class="foot_top">
            <div class="foot_link">
                <a href="" target="_blank">网站地图</a> |
                <a href="" target="_blank">版权信息</a> |
                <a href="" target="_blank">联系我们</a> |
                <a href="" target="_blank">电影之家</a>
            </div>
        </div>
    </div>

		<!-- 页脚部分结束 -->
		
		
	</body>
</html>