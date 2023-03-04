

<!doctype html>
<html lang="zh">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>CveetGAMES.Platform</title>
    <link rel="icon" href="https://imgs.wiki/imgs/2022/04/24/9d8b19988d5b450d.png" type="image/x-icon">
    <meta name="keywords" content="小游戏平台" />
    <meta name="description" content="小游戏平台" />
    <meta name="author" content="CVEET" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link rel='stylesheet' href="https://cdn.staticfile.org/twitter-bootstrap/3.3.5/css/bootstrap.min.css" />
    <link rel='stylesheet' href="/cssjs/material-dashboard.css" />
    <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.1.0/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/cssjs/material-dashboard.js" type="text/javascript"></script>
    <!--<script src="https://cdn.bootcdn.net/ajax/libs/chartist/0.9.8/chartist.js"></script>-->
    <script src="/cssjs/material-dashboard.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-190316399-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-190316399-1');
    </script>
<!--全局变灰 
 <style>
    html { 
        -webkit-filter: grayscale(100%); 
        -moz-filter: grayscale(100%); 
        -ms-filter: grayscale(100%); 
        -o-filter: grayscale(100%); 
		filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);  
        _filter:none; 
    } 
</style> -->
<!---->
    <script>
 
$(function(){
	$('#tab > li').on("click",function(){
		var num=$(this).index();
		//var src=basePath+urlArr[num];
		$('#tab > li').each(function(){
			if($(this).index()==num){
				$(this).attr("class","li current");
			}else{
				$(this).attr("class","li");
			}
		});
		//$('#classify_iframe').attr("src",src);
	});
});
 </script>
 

  
</head>
<!--
<body>
-->


<body background="logo/背景图.jpg"
style=" background-repeat:no-repeat ;
background-size:100% 100%;
background-attachment: fixed;">





<!-- 
        <h3 style="font-weight: bold;text-align:center;font-size: 30px;">公 告</h3>
        
        <div style="font-size: 16px;margin-top: 26px;line-height: 30px;color: #999;">小游戏平台, 收录了各大热门页游, 在neocities上进行托管. Tips：Neocities不支持.PHP格式与"?Tab="页面切换。</div>
            
      
        
        <a style="display: block;
        background: #008f00;
        color: #FFF;
        text-align: center;
        font-weight: bold;
        font-size: 19px;
        line-height: 60px;
        margin: 0 auto;
        margin-top: 45px;
        border-radius: 32px;
        width: 80%;
        " onclick="
        javascript:document.querySelector('#winmsg').remove()">我知道了</a>
    </div>
</div>-->





<div class="waifu">            
  <script src="https://eqcn.ajz.miesnfu.com/wp-content/plugins/wp-3d-pony/live2dw/lib/L2Dwidget.min.js"></script>
  <script>
    L2Dwidget.init({
      "model": { "jsonPath":"https://unpkg.com/live2d-widget-model-shizuku@1.0.5/assets/shizuku.model.json", "scale": 1, "hHeadPos":0.5, "vHeadPos":0.618 },
      "display": { "position": "left", "width": 115, "height": 165, "hOffset": 0, "vOffset": 0 },
      "mobile": { "show": true, "scale": 0.5 },
      "react": { "opacityDefault": 0.7, "opacityOnHover": 0.2 }
    });
  </script>
</div>

<!--圣诞节下雪花.Powered By CVEET(C)
<script type="text/javascript">
(function($){
	$.fn.snow = function(options){
	var $flake = $('<div id="snowbox" />').css({'position': 'absolute','z-index':'9999', 'top': '-50px'}).html('&#10052;'),
	documentHeight 	= $(document).height(),
	documentWidth	= $(document).width(),
	defaults = {
		minSize		: 10,
		maxSize		: 20,
		newOn		: 1000,
		flakeColor	: "#AFDAEF" /* 此处可以定义雪花颜色，若要白色可以改为#FFFFFF */
	},
	options	= $.extend({}, defaults, options);
	var interval= setInterval( function(){
	var startPositionLeft = Math.random() * documentWidth - 100,
	startOpacity = 0.5 + Math.random(),
	sizeFlake = options.minSize + Math.random() * options.maxSize,
	endPositionTop = documentHeight - 200,
	endPositionLeft = startPositionLeft - 500 + Math.random() * 500,
	durationFall = documentHeight * 10 + Math.random() * 5000;
	$flake.clone().appendTo('body').css({
		left: startPositionLeft,
		opacity: startOpacity,
		'font-size': sizeFlake,
		color: options.flakeColor
	}).animate({
		top: endPositionTop,
		left: endPositionLeft,
		opacity: 0.2
	},durationFall,'linear',function(){
		$(this).remove()
	});
	}, options.newOn);
    };
})(jQuery);
$(function(){
    $.fn.snow({ 
	    minSize: 5, /* 定义雪花最小尺寸 */
	    maxSize: 50,/* 定义雪花最大尺寸 */
	    newOn: 150  /* 定义密集程度，数字越小越密集 */
    });
});
</script>-->
        <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="">
            <div class="logo">
                <a href="#" target="right" class="simple-text"><img src="https://g.deev.is/favicon.ico" width="30" height="30" /> CveetGame</a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="index.html">
                            <i class="fa fa-gamepad"></i>
                            <p>热门游戏</p>
                        </a>
                    </li>
                    <li>
                        <a href="musicGAME.html">
                            <i class="fa fa-gamepad"></i>
                            <p>音乐游戏</p>
                        </a>
                    </li>
                   <!--https://mirlkoi.ifast3.vipnps.vip/Tag/Random/main.html--> 
                    <li>
                        <a href="https://cveet-is.neocities.org/r18/" target="_blank">
                            <i class="fa fa-picture-o"></i>
                            <p>二次元图</p>
                        </a>
                    </li>
                    <li >
                        <a href="http://cveet.neocities.org/">
                            <i class="fa fa-window-restore"></i>
                            <p>其他网站</p>
                        </a>
                    </li>
                    <li >
                        <a href="https://cveet.neocities.org/">
                            <i class="fa fa-twitch"></i>
                            <p>About</p>
                        </a>
                    </li>
                    
                    <li>
                        <a href="https://youquhome.com/" target="_blank">
                            <i class="fa fa-link"></i>
                            <p>神秘链接</p>
                        </a>
                    </li>
                    <li>
                        <a href="http://vrc.group/BUG.3672" target="_blank">
                            <i class="fa fa-link"></i>
                            <p>VRCHAT+</p>
                        </a>
                    </li>
                </ul>
<!--2023新年倒计时.Powered By CVEET(C)-->      
<div class="gn_box">
  <center>
        <div id="CountMsg" class="HotDate">
            <span id="t_hy">春节还有</span>
            <span id="t_d">114 天</span>
            <span id="t_h">5 时</span>
            <span id="t_m">1 分</span>
            <span id="t_s">4 秒</span>
        </div>
    </center>
    <script type="text/javascript"> function getRTime() {
        var EndTime = new Date('2024/02/10 00:00:00');
        var NowTime = new Date();
        var t = EndTime.getTime() - NowTime.getTime();
        var d = Math.floor(t / 1000 / 60 / 60 / 24);
        var h = Math.floor(t / 1000 / 60 / 60 % 24);
        var m = Math.floor(t / 1000 / 60 % 60);
        var s = Math.floor(t / 1000 % 60);
        document.getElementById("t_d").innerHTML = d + " 天";
        document.getElementById("t_h").innerHTML = h + " 时";
        document.getElementById("t_m").innerHTML = m + " 分";
        document.getElementById("t_s").innerHTML = s + " 秒";
    }
    setInterval(getRTime, 1000);
    </script>
</div>
                <div align="center">
                    <hr>
                    <a href="https://icp.gov.moe/?keyword=20221914" target="_blank">✮萌ICP备202201914号✮</a>
                </div>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute" style="background-color: #fff;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li >
                                <a href="/sign-in.html" class="dropdown-toggle">
                                    <i class="fa fa-file-text-o"></i>
                                    <p class="hidden-lg hidden-md">SIGN-IN</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <link rel="stylesheet" href="/cssjs/sptx.css">
            
                        
<section class="main">
	<div class="box">
		<div>
			<a href="https://xingye.me/game/eatkano/index.php">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/7af8ebd1ade0b6b1.gif"> 吃掉小鹿乃
					</div>
					<div class="desc">亚音游，底力练习器，附带世界排行榜</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://arcxingye.github.io/Synthetic/">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/f3d6f659696ea97e.gif"> 合成大鹿乃
					</div>
					<div class="desc">大西瓜魔改，粉丝向游戏，右上可换球</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://gartic.io/">
				<div class="item">
					<div class="logo">
						<img src="https://gartic.io/favicon.ico"> 你画我猜
					</div>
					<div class="desc">在线多人游玩，可以不登陆</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://arcxingye.github.io/zhsl/index.html">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/3e94955b1985556f.gif"> 召唤神龙
					</div>
					<div class="desc">经过修改的简单版，大幅降低游戏难度，有手就行</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://xingye.me/game/mofang/index.html">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/04/30/8cc03f9411b8c285.png"> 3D魔方
					</div>
					<div class="desc">普通的三阶魔方</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://xingye.me/game/xsxn/index.html">
				<div class="item">
					<div class="logo">
						<img src="https://xingye.me/game/xsxn/icon.png"> 像素小鸟
					</div>
					<div class="desc">点击操纵小鸟飞跃管道</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://xingye.me/game/squishybird/index.htm">
				<div class="item">
					<div class="logo">
						<img src="https://xingye.me/game/xsxn/icon.png"> 压扁小鸟
					</div>
					<div class="desc">解压的反向游戏，先玩像素小鸟再玩这个</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://xingye.me/game/qjm/index.html">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/15e4c3f7237e8d29.gif"> 切积木
					</div>
					<div class="desc">要划的又快又长</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://xingye.me/game/colortest/index.html">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/1a167f02e918e928.gif"> 色弱测试
					</div>
					<div class="desc">测测你的眼睛过不过关吧</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://g.deev.is/fnaw/">
				<div class="item">
					<div class="logo">
						<img src="https://g.deev.is/fnaw.jpg"> 温斯顿的五晚
					</div>
					<div class="desc">FNAW，FNFW的同人作品</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://classic.minecraft.net/">
				<div class="item">
					<div class="logo">
						<img src="https://www.minecraft.net/etc.clientlibs/minecraft/clientlibs/main/resources/favicon.ico"> Minecraft
					</div>
					<div class="desc">在线网页玩MC，需要电脑键盘</div>
				</div>
			</a>
		</div>
		
		
		<div>
			<a href="https://amemei.github.io/rpg/">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/316050f569ef17d8.gif"> 云烟rpg
					</div>
					<div class="desc">正在制作中的游戏</div>
				</div>
			</a>
		</div>
		<div>
			<a href="http://www.minesweeper.cn/">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/2c3e76bcae3f15e6.gif"> 扫雷
					</div>
					<div class="desc">经典游戏</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://xingye.me/game/mota/index.html">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/49e20371306ecd60.gif"> 24层魔塔
					</div>
					<div class="desc">经典游戏</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://h5mota.com/games/51/">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/49e20371306ecd60.gif"> 50层魔塔
					</div>
					<div class="desc">经典游戏</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://zrtech.org/find-keke/">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/eedd0082fde6939c.gif"> 寻找唐可可
					</div>
					<div class="desc">测速</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://xingye.me/game/lifeRestart/index.html">
				<div class="item">
					<div class="logo">
						<img src="https://xingye.me/game/lifeRestart/images\icons\icon-72x72.png"> 人生重开模拟器
					</div>
					<div class="desc">垃圾人生一刻都不想待了</div>
				</div>
			</a>
		</div>
		<div>
			<a target="_blank"
				href="https://cdn-1258575882.cos.ap-guangzhou.myqcloud.com/gameList/xiangQi/vssvip/web-mobile/index.html">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/40b0bc72baff69b3.gif"> 万宁象棋
					</div>
					<div class="desc">暂无简介</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://animalchess.youdewan.cn/static/WanNingTaiQiu/web-mobile/">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/a4668c20af7ba892.gif"> 万宁台球
					</div>
					<div class="desc">暂无简介</div>
				</div>
			</a>
		</div>
		<div>
			<a target="_blank"
				href="https://cdn-1258575882.cos.ap-guangzhou.myqcloud.com/gameList/wuZiQi/hhfhdf_1.0.37/web-mobile/index.html">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/2796d29c2be072aa.gif"> 万宁五子棋
					</div>
					<div class="desc">暂无简介</div>
				</div>
			</a>
		</div>
		<div>
			<a href="http://www.wesane.com/game/751/">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/a5b0e71b187185de.gif"> 大丰收
					</div>
					<div class="desc">手机性能测试器</div>
				</div>
			</a>
		</div>
		<div>
			<a href="http://ggg.gaofushuaiba.cn/minigame/dycxy/">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/89a0f9f4f5b92563.gif"> 大球吃小球
					</div>
					<div class="desc">认清你自己</div>
				</div>
			</a>
		</div>
		<div>
			<a href="http://www.wesane.com/game/726/">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/c2a21d1cb55a58ba.gif"> 大力出奇迹
					</div>
					<div class="desc">简单好玩的桌球游戏，注意不要卡角落了</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://littlegame.tomato123.cn/xiyou/index.html">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/6ce15878ec7505ea.gif"> 梗西游
					</div>
					<div class="desc">缝合游戏</div>
				</div>
			</a>
		</div>
		<div>
			<a href="http://jlh.125ks.cn/cxk/">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/46a15b861da52fa5.gif"> 蔡徐坤打灰机					
						</div>
					<div class="desc">暂无简介</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://seoi.net/penint/">
				<div class="item">
					<div class="logo">
						<img src="https://seoi.net/assets-seoi/seoi-0.ico"> 画牛子
					</div>
					<div class="desc">画完摇一摇</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://game2.sfplay.net/fish_assets/externallink/">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/41b59e90b0d03dee.gif"> sfplay
					</div>
					<div class="desc">钓鱼/古董/水坑模式，鉴古董玩法比较出名</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://jcw87.github.io/c2-sans-fight/">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/03/9d68ec6cc06cf5a7.gif"> c2-sans-fight
					</div>
					<div class="desc">Undertale中的sans战斗</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://m.h5cafe.com/scarlet/">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/70748c1379302c7d.gif"> SCARLET
					</div>
					<div class="desc">揪出渣男渣女</div>
				</div>
			</a>
		</div>
		<div>
			<a href="http://www.staggeringbeauty.com">
				<div class="item">
					<div class="logo">
						<img src="photos/sd1.gif"> staggeringbeauty
					</div>
					<div class="desc">癫痫警告！本游戏具有大量闪烁画面！</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://2020game.io/">
				<div class="item">
					<div class="logo">
						<img src="photos/2020game1.png"> 2020game
					</div>
					<div class="desc">2020年大事件做成游戏</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://littlealchemy.com">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/02/7ceb463931190865.gif"> 小小炼金术
					</div>
					<div class="desc">暂无简介</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://amemei.github.io/Nyakori/index.html">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/02/ee6ac88decea1d1e.gif"> 喵可莉的兔玩偶
					</div>
					<div class="desc">微恐怖冒险解密正作无dlc，100%不动请刷新</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://amemei.github.io/nyaruru/index.html">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/02/c80c037168ea22bb.gif"> 咸鱼喵喵demo
					</div>
					<div class="desc">建议横屏。完整版7月1日steam开售，记得来买</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://game.chronodivide.com/">
				<div class="item">
					<div class="logo">
						<img src="https://game.chronodivide.com/favicon.ico"> 红警
					</div>
					<div class="desc">仅限电脑，联机对战</div>
				</div>
			</a>
		</div>
		<div>
			<a href="http://ggg.gaofushuaiba.cn/minigame/endlesslake/">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/01/a8bad1d82fabc361.gif"> 无尽之湖
					</div>
					<div class="desc">暂无简介</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://play.famobi.com/bubble-tower-3d/A1000-10">
				<div class="item">
					<div class="logo">
						<img src="https://imgs.wiki/imgs/2022/05/03/8e9a8ec82bdc95ee.gif"> 泡泡塔
					</div>
					<div class="desc">非常费时间，简单休闲。</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://playcsol.com/">
				<div class="item">
					<div class="logo">
						<img src="photos/cs1.gif"> CS网页版
					</div>
					<div class="desc">在线玩cs1.6无需客户端</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://xingye.me/game/FlowersVsZombies/">
				<div class="item">
					<div class="logo">
						<img src="photos/pvz1.gif"> Flowers vs Zombies
					</div>
					<div class="desc">简易版植物大战僵尸</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://cdn.198434.com/cli/H5/sheep2sheepkun/">
				<div class="item">
					<div class="logo">
						<img src="photos/kun1.gif"> 坤了个坤
					</div>
					<div class="desc">智商不够就不要（）</div>
				</div>
		  </a>
		</div>
				
	
		<div>
			<a href="https://slowroads.io/">
				<div class="item">
					<div class="logo">
						<img src="/photos/car.jpg"> Slow  Roads
					</div>
					<div class="desc">可以在线游玩休闲惬意的驾驶小游戏</div>
				</div>
			</a>
		</div>
		<div>
			<a href="http://tank-war.top/">
				<div class="item">
					<div class="logo">
						<img src="/photos/tanke.png">坦克大战
					</div>
					<div class="desc">坦克世界，不过是阉割青春版</div>
				</div>
			</a>
		</div>
		<div>
			<a href="http://synesthesiagame.com/">
				<div class="item">
					<div class="logo">
						<img src="/photos/eye.png">眼球的冒险
					</div>
					<div class="desc">奇奇怪怪的小游戏</div>
				</div>
			</a>
		</div>
		<div>
			<a href="https://ffffidget.com/">
				<div class="item">
					<div class="logo">
						<img src="/photos/tuoluo.png">FFFFidget
					</div>
					<div class="desc">可以观察指尖陀螺的谜之旋转</div>
				</div>
			</a>
		</div>
		<div>
			<a href="http://tank-war.top/">
				<div class="item">
					<div class="logo">
						<img src="https://slay.one/imgs/favicon.png">Slay.one
					</div>
					<div class="desc">类似于大逃杀类型的小游戏</div>
				</div>
			</a>
		</div>
		<div>
			<a href="http://magickeyboard.io/">
				<div class="item">
					<div class="logo">
						<img src="/photos/miao.png">妙控键盘
					</div>
					<div class="desc">很简单的“打字工具”，当你进入网站还在想这是干什么的时候，按下键盘，立马酸爽起来！</div>
				</div>
			</a>
		</div>
		<div>
			<a href=" https://splix.io/">
				<div class="item">
					<div class="logo">
						<img src="https://splix.io/img/fbthumb.png "> Splix.io
					</div>
					<div class="desc">   最新的IO系列游戏作品！游戏的内容是尽可能为自己圈更大的地盘，在圈地的途中不要让其他玩家撞到你的圈地线   </div>
				</div>
			</a>
		</div>
		
		
		
		<div>
			<a href="https://www.lexaloffle.com/bbs/?tid=44606">
				<div class="item">
					<div class="logo">
						<img src="/photos/terra.png"> 《 泰 拉 》
					</div>
					<div class="desc"> Terra - A Terraria Demake ，需要电脑键盘    </div>
				</div>
			</a>
		</div>
		<!--
		<div>
			<a href=" ">
				<div class="item">
					<div class="logo">
						<img src=" "> 
					</div>
					<div class="desc">      </div>
				</div>
			</a>
		</div>
    -->    
	</section> 
	                </div>                   
                </div>
            </div>
        </div>
        
  
</body>

</html>
