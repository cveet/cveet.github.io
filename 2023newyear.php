<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="UTF-8">
		<title>欢迎来到 CVEET 主页</title>
        	<link rel="shortcut icon" href="https://g.deev.is/favicon.ico" />

		<script>
			//判断客户端设备，选择写入meta
			function init_viewport() {
				if (navigator.userAgent.indexOf('Android') != -1) {
					var version = parseFloat(RegExp.$1);
					if (version > 2.3) {
						var width = window.outerWidth == 0 ? window.screen.width : window.outerWidth;
						var phoneScale = parseInt(width) / 500;
						document.write('<meta name="viewport" content="width=500, minimum-scale = ' + phoneScale + ', maximum-scale = ' + phoneScale + ', target-densitydpi=device-dpi">');
					} else {
						document.write('<meta name="viewport" content="width=500, target-densitydpi=device-dpi, user-scalable=0">');
					}
				} else if (navigator.userAgent.indexOf('iPhone') != -1) {
					var phoneScale = parseInt(window.screen.width) / 500;
					document.write('<meta name="viewport" content="width=500, min-height=750, initial-scale=' + phoneScale + ', maximum-scale=' + phoneScale + ', user-scalable=0" /> ');         //0.75   0.82
				} else {
					document.write('<meta name="viewport" content="width=500, height=750, initial-scale=0.64" /> '); //0.75  0.82
				}
			}
			init_viewport();
		</script>

		<style>
			* {
				padding: 0px;
				margin: 0px;
				-webkit-box-sizing: border-box;
			}

			body {
				background-color: white;
			}

			a {
				color: white;
				text-decoration: none;
			}

			#div_container {
				/*最外层div，用于居中兼容PC和移动*/
				width: 500px;
				margin: 0px auto;
				position: relative;
				/*background-color: #FAFAFA;*/
				font-size: 1em;
			}



			.div_simple_page {
				/*文字部分的最外层，用于定位*/
				position: relative;
				display: none;
			}

			.div_s_page_bg {
				/*背景设置在这里*/
				background-repeat: repeat;
				background-size: 100%;
				background-attachment: fixed;
				width: 500px;
				min-height: 1200px;
			}

			.div_s_page_height {
				visibility: hidden;
				padding: 30px;
				text-align: justify;
				/*为了使文字两端对齐 */
				white-space: pre-wrap;
				/*保留换行效果*/
				color: silver;
			}

			.div_s_page_zx {
				position: absolute;
				left: 0;
				right: 0;
				/*4个方向定位使div充满整个画画*/
				top: 0;
				bottom: 0;
				/*4个方向定位使div充满整个画画*/
				width: 500px;
				background: rgba(255, 255, 255, 0.8);
				/*半透明效果*/
				padding: 10%;
				text-align: justify;
				/*为了使文字两端对齐 */
				white-space: pre-wrap;
				/*保留换行效果*/
			}


			#div_start_bg {
				width: 100%;
				height: 100%;
				position: absolute;
				left: 0px;
				top: 0px;
				z-index: 44;
				background-color: white;
			}
		</style>
		<style type="text/css">
			.div_pure_words {
				/*文字部分的最外层，用于定位*/
				position: relative;
				display: none;
			}

			.div_pure_words_bg {
				/*背景设置在这里*/
				background-repeat: repeat;
				background-size: 100%;
				background-attachment: fixed;
				width: 500px;
				min-height: 500px;
			}

			.div_pure_words_height {
				visibility: hidden;
				padding: 30px;
				text-align: justify;
				/*为了使文字两端对齐 */
				white-space: pre-wrap;
				/*保留换行效果*/
				font-size: 1.1em;
				font-family: "Microsoft YaHei", "Arial";
				color: white;
			}

			.div_pw_typed {
				position: absolute;
				left: 0;
				right: 0;
				/*4个方向定位使div充满整个画画*/
				top: 0;
				bottom: 0;
				/*4个方向定位使div充满整个画画*/
				width: 500px;
				background: rgba(255, 255, 255, 0.8);
				/*半透明效果*/
				padding: 30px;
				text-align: justify;
				/*为了使文字两端对齐 */
			}

			#span_pw_typed {
				width: 100%;
				/*为了使文字两端对齐 */
				white-space: pre-wrap;
				/*保留换行效果*/
				font-size: 1.1em;
				font-family: "Microsoft YaHei", "Arial";
			}


			#div_start_bg {
				width: 100%;
				height: 100%;
				position: absolute;
				left: 0px;
				top: 0px;
				z-index: 44;
				background-color: white;
			}
		</style>

		<link type="text/css" rel="stylesheet" href="http://3.wazf.top/css/theme_s_page_zx.css">
		<!-- 按钮部分的样式 -->
		<link type="text/css" rel="stylesheet" href="http://3.wazf.top/css/theme_public_btn.css">
		<!-- 按需加载，选择此片头时方才加载 -->
		<link type="text/css" rel="stylesheet" href="http://3.wazf.top/css/start_intersect.css">

		<!-- 按钮部分的样式 -->
		<!-- <link type="text/css" rel="stylesheet" href="./static/css/theme_public_btn.css"> -->

		<!-- 按需加载，选择此片头时方才加载 -->
		<link type="text/css" rel="stylesheet" href="./static/css/start_hearttree.css">
	</head>

	<body>
		<div id="div_container">
			<!-- 最外层div，用于居中兼容PC和移动 -->
			<div id="div_start_bg"></div> <!-- 用于遮挡主题，作为片头的背景 -->
			<!-- 按需加载，选择此片头时方才加载 -->
			<div id="div_intersect">
				<!-- 用于设置背景 -->
				<div id="div_is_inner">
					<!-- 用于存放content -->
					<div class="div_is_open_bg">
						<div class="div_is_open_btn" onclick="init_is_typed()"></div>
					</div>

					<!-- 画布在这里 -->
					<canvas id="canvas_is"></canvas>

					<!-- 打字在这里 -->
					<div class="div_is_typed">
						<div id="div_is_img">
							<img class="img_is_typed">
						</div>
						<span id="span_is_typed"></span>
					</div>
				</div>
			</div>

			<div id="div_hearttree">
				<div id="div_tree_error">很可惜你的手机浏览器不支持，错过了惊喜效果哦</div>
				<div id="div_tree_start"></div>
				<div id="div_tree_main">
					<div id="div_tree_text">
						<span id="span_tree_typed"></span>
					</div>
					<canvas id="canvas_tree" width="500" height="815"></canvas>
					<div id="div_tree_timer">
						<span id="span_tree_desc"></span>
						<div id="div_tree_interval"></div>
					</div>
				</div>
			</div>


			<!-- 以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头 -->
			<!-- 以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头 -->
			<!-- 以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头 -->
			<!-- 以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头 -->
			<!-- 以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头  以上是动画和视频片头 -->






			<div class="div_simple_page">
				<!-- 文字部分的最外层，用于定位 -->
				<div class="div_s_page_bg">
					<!-- 背景设置在这里 -->
					<div class="div_s_page_height">
						<!-- 正文的内容复制到这里面，撑开整个文档的高度 -->
					</div>
				</div>
				<div class="div_s_page_zx">
					<!-- 正文部分，绝对定位 -->
					<!-- zx-editor的内容放在这里 -->
				</div>
			</div>

			<div class="div_pure_words">
				<!-- 文字部分的最外层，用于定位 -->
				<div class="div_pure_words_bg">
					<!-- 背景设置在这里 -->
					<div class="div_pure_words_height">
						<!-- 正文的内容复制到这里面，撑开整个文档的高度 -->
					</div>
				</div>
				<div class="div_pw_typed">
					<!-- 正文部分，绝对定位 -->
					<span id="span_pw_typed"></span>
				</div>
			</div>

			<div id='div_btn_container'>
				<!-- 按钮部分的最外层，处于文档流之中 -->
				<div id="div_btn_inner">
					<!-- 按钮部分内层，用于定位 -->

					<div class='div_music_tips'></div>
					<div class="div_btn" id="div_music" onclick="music_switch()">
						<!-- 音乐按钮部分 -->
						<!-- 						<img id='img_music' src='http://3.wazf.top/images/music_note_big.png' style='-webkit-animation:music_play_rotate 1s linear infinite'>
 -->
						<audio id="audio_music" autoplay="autoplay" loop="loop">
							<source type="audio/mpeg" />
							<!-- 您的浏览器不支持播放音乐 -->
						</audio>
					</div>

					<div class='div_record_tips'></div>


					<!-- 只在提交状态显示 只在提交状态显示 只在提交状态显示 只在提交状态显示 -->
					<div class="div_btn" id='div_support'>
						<a id='moreLink' href="https://cveet.neocities.org"><span>好康</span></a>
					</div>
					<!-- 只在提交状态显示 只在提交状态显示 只在提交状态显示 只在提交状态显示 -->

					<!-- 只在未提交状态显示 只在未提交状态显示 只在未提交状态显示 只在未提交状态显示 -->

					<!-- 只在未提交状态显示 只在未提交状态显示 只在未提交状态显示 只在未提交状态显示 -->
				</div>
			</div>
		</div>

		<script src="http://3.wazf.top/js/jquery-2.0.3.min.js"></script>
		<script src="http://3.wazf.top/js/typed.min.js"></script>
		<script src="http://3.wazf.top/js/support_upload_as.js"></script>
		<script src="http://3.wazf.top/js/jweixin-1.2.0.js"></script>

		<script>
			var tempRes = {};
			
			let urlArr = location.pathname.split('/');
			console.log(location.pathname)
			var num = location.pathname.replace(/\//g,"");
			$.ajax({
				//url: "https://love.layzz.cn/qrcode/getContentById?source="+source+"&id=" + num,
				url: "https://love.layzz.cn/qrcode/getV2ContentById?source=301&contentId="+num,
				async: false,

				success: function(res) {
					console.log(res);
					tempRes = res
				}
			});
			if (tempRes.data.pageType == 1) {
				//	console.log('$(window).height ->' + $(window).height());
				var theme = 'simple_page';
				//	console.log('theme ->' + theme);
				var theme_content = {
					"pure_words_content": "",
					"typed_bool": "typed_y",
					"cursor_char": "cursor_heart",
					"bg_style_pure_words": "bg_opacity",
					"bg_img": "http://ali2.a.yximgs.com/upic/2020/12/26/21/BMjAyMDEyMjYyMTM4MzNfNTQ4MTA5ODcwXzQxMzU0MjQyNzQ3XzFfNg==_B6886c06bb821605293c490c3cc675bf0.jpg",
					"simple_page_content": "&lt;h2 style=&quot;color: rgb(255, 88, 61);&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;\/h2&gt;&lt;h2 style=&quot;color: rgb(255, 88, 61);&quot;&gt;&lt;span style=&quot;color: rgb(255, 88, 61); font-size: 1.2em;&quot;&gt;&lt;br&gt;&lt;\/span&gt;&lt;\/h2&gt;&lt;h2&gt;&lt;span style=&quot;font-size: 1.2em;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;\/span&gt;&lt;span style=&quot;color: rgb(255, 88, 61); font-size: 1.2em;&quot;&gt;2021 &amp;nbsp;&lt;\/span&gt;&lt;span style=&quot;color: rgb(255, 88, 61); font-size: 1.2em;&quot;&gt;\u8de8\u5e74\u5feb\u4e50\u5440&lt;\/span&gt;&lt;br&gt;&lt;\/h2&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(255, 88, 61); font-size: 1.2em;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; \ud83d\udc95\ud83d\udc95\ud83d\udc95\ud83d\ude1c\ud83d\ude1c\ud83d\ude1c&lt;\/span&gt;&lt;\/p&gt;",
					"video_page_content": "",
					"bg_style": "bg_custom"
				};
				//	console.log(theme_content);

				var music_json = {
					"music_select": "m_online",
					"m_online_id": "6",
					"m_online_url": "https://sf3-dycdn-tos.pstatp.com/obj/ies-music/1655235697334302.mp3",
					"m_upload_name": "null",
					"m_upload_url": "null"
				};
				//console.log(music_json);
				var record_json = {
					"record_bool": "r_false",
					"r_wechat_time": "null",
					"r_wechat_url": "null",
					"r_wechat_amr": "null"
				};
				//	console.log(record_json);
				var signPackage = {
					"appid": "wx47f716bdd7699533",
					"timestamp": 1608990661,
					"nonceStr": "Z3NpX9ii7gQYYlP9",
					"url": "http:\/\/www.makusi.cn\/Home\/Play\/play_show\/ws\/YGdsmm1q",
					"signature": "f6da074e2a06937f6c73dc02256064b5a20f6fbd",
					"rawString": "jsapi_ticket=sM4AOVdWfPE4DxkXGEs8VHINcjHJVwMsFjJyfreRy7BIe_ZfGkonFFUFo61KD6kuytthhMnZiacZNaW5kUNJIQ&noncestr=Z3NpX9ii7gQYYlP9&timestamp=1608990661&url=http:\/\/www.makusi.cn\/Home\/Play\/play_show\/ws\/YGdsmm1q"
				};

				var main_title = '2022跨年快乐❤️';
				// console.log(main_title);
				if (main_title == '' || main_title == 'null') { //允许标题为空
					document.title = '很高兴遇见你';
				}
				// console.log("");



				var interval_s_height;
				var height_s_page = $(".div_s_page_height").height();
			} else {
				var window_height = $(window).height();
				console.log('window_height ->' + window_height);

				var theme = 'pure_words';
				console.log('theme ->' + theme);
				var theme_content = {
					"pure_words_content": "\u6c49\u8bed\uff1a\u6211\u559c\u6b22\u4f60\u2764\ufe0f\r\n\u7ca4\u8bed\uff1a\u6211\u4e2d\u610f\u4f60\ud83d\udc96\r\n\u82f1\u8bed\uff1aI love you\ud83d\udc9e\r\n\u6cd5\u8bed\uff1aJe t\u2019aime bien.\ud83d\udc97\r\n\u97e9\u8bed\uff1a\uc88b\uc544\ud574\uc694.\uff08\u8bfb\u6cd5:\u7cd6\u5fc3\u5462\u513f\u6233\u554a\u563f\u54df\uff09\ud83d\udc98\r\n\u65e5\u8bed\uff1a\u3042\u306a\u305f\u304c\u597d\u304d\u3067\u3059\uff08\u8bfb\u6cd5:si ki da yo\uff09\u2763\ufe0f\r\n\u5fb7\u8bed\uff1aIch mag dich.\ud83d\udc95\r\n\ud83c\udf08\ud83c\udf1f\ud83d\udc84\u2601\ufe0f\ud83c\udf52\u2600\ufe0f",
					"typed_bool": "typed_n",
					"cursor_char": "cursor_heart",
					"bg_style_pure_words": "bg_opacity",
					"bg_img": "https://mp.weixin.qq.com/s/_QS_89JbfgR48JcmzZvTlw",
					"simple_page_content": "&lt;p&gt;&lt;br&gt;&lt;\/p&gt;",
					"video_page_content": "",
					"bg_style": "bg_simple",
					"m_album_img": ["http:\/\/imgs.makusi.cn\/1164_200220112552.jpg",
						"http:\/\/imgs.makusi.cn\/1164_200220112557.jpg",
						"http:\/\/imgs.makusi.cn\/1164_200220112601.jpg"
					],
					"m_album_text": [
						"\u6765\u65e5\u65b9\u957f\u7ec6\u6c34\u957f\u6d41\u4f60\u8981\u7684\u7231\u548c\u611f\u52a8\u6211\u6162\u6162\u7ed9\u4f60\u4f60\u53c8\u8001\u4e86\u4e00\u5c81\u6211\u7684\u5c0f\u53ef\u7231\u751f\u65e5\u5feb\u4e50\u966a\u4f60\u9752\u4e1d\u5230\u767d\u5934\u966a\u4f60\u770b\u671d\u9633",
						"\u6211\u4f1a\u76f4\u5ba0\u7740\u4f60\u6211\u7684\u5c0f\u516c\u4e3b\u751f\u65e5\u5feb\u4e50",
						"\u4f60\u662f\u6211\u4eca\u751f\u6e21\u4e0d\u8fc7\u7684\u52ab\u591a\u770b\u4e00\u773c\u5c31\u5fc3\u8f6f\u62e5\u62b1\u4e00\u4e0b\u5c31\u6ca6\u9677"
					],
					"m_album_loop": "loop_y",
					"m_albumun_img": ["http:\/\/imgs.makusi.cn\/1164_200123194445.jpg", "", "", "", "", "", "", "", ""],
					"m_albumun_text": [
						"\u6211\u505a\u4e8b\u603b\u662f\u4e09\u5206\u949f\u70ed\u5ea6\uff0c\u5374\u4e5f\u7231\u4f60\u8fd9\u4e48\u4e45\u3002",
						"", "", "", "", ""
					]
				};
				console.log(theme_content);

				var music_json = {
					"music_select": "m_online",
					"m_online_id": "2",
					"m_online_url": "https://sf3-dycdn-tos.pstatp.com/obj/iesmusic-cn-local/v1/tos-ag-v-0000/f7ea325e60c34c1a87527cd3f598c8b1",
					"m_upload_name": "\u6d41\u4ed9\u53cc\u7b19-\u8c13\u98ce",
					"m_upload_url": "http:\/\/audio.makusi.cn\/1164_200216180727.m4a"
				};
				console.log(music_json);
				var record_json = {
					"record_bool": "r_false",
					"r_wechat_time": "null",
					"r_wechat_url": "null",
					"r_wechat_amr": "null"
				};
				console.log(record_json);
				var signPackage = {
					"appid": "wx47f716bdd7699533",
					"timestamp": 1582195506,
					"nonceStr": "eclMTsa158WZOMn8",
					"url": "http:\/\/www.makusi.cn\/Home\/Play\/play_show\/ws\/YGdml21m",
					"signature": "5664d1d8a90f1998792c58b0645988bfb9c9c77c",
					"rawString": "jsapi_ticket=sM4AOVdWfPE4DxkXGEs8VHINcjHJVwMsFjJyfreRy7BnfbqSewuefU_UBw32ScSPocy3iTlOCorajgS_jAMSkA&noncestr=eclMTsa158WZOMn8&timestamp=1582195506&url=http:\/\/www.makusi.cn\/Home\/Play\/play_show\/ws\/YGdml21m"
				};

				var main_title = '我喜欢你❤️';
				// console.log(main_title);
				if (main_title == '' || main_title == 'null') { //允许标题为空
					document.title = '慢慢喜欢你';
				}
				// console.log(""); 


				
				var str_cursorChar;
				var typed_bool;

				var interval_pw_height;
				var height_div_pw = $(".div_pure_words_height").height();
			}

			function init_simple_page() {
				load_saved_content(); //加载内容
				// 初始化设置div的bg图片 初始化设置div的bg图片
				if (typeof(theme_content['bg_style']) != 'undefined' && theme_content['bg_style'] == 'bg_custom') {
					if (typeof(theme_content['bg_img']) != 'undefined' && theme_content['bg_img'] != '') {
						$(".div_s_page_bg").css({
							"background-image": "url(" + theme_content['bg_img'] + ")"
						});
					}
				}

				interval_s_height = setInterval(function() {
					//console.log('div_s_page_height -> ' + $(".div_s_page_height").height());
					var latest_height_s_page = $(".div_s_page_height").height();
					if (latest_height_s_page <= height_s_page) {
						clearInterval(interval_s_height);
						$(".div_s_page_height").height(latest_height_s_page + 200);
						if ($(".div_s_page_height").height() < $(window).height()) {
							$(".div_s_page_height").height($(window).height()); //不能小于窗口的高度
							//console.log('let us be high as window');
						}
					} else {
						height_s_page = latest_height_s_page;
					}
				}, 100);

				if (start_content.skip != 1) {
					$(".div_simple_page").fadeIn();
				}
				init_attachment();
			}



			function load_saved_content() {
				var s_page_content = theme_content['simple_page_content'];
				if (typeof(s_page_content) == 'undefined') { //全新作品未保存
					//	console.log('s_page_content -> undefined');
					load_random_content();
					return;
				}
				//	console.log('load_saved_content');
				let str =
					'<div class="div_s_page_zx"><h2 style="color: rgb(255, 88, 61);"></h2><h2 style="color: rgb(255, 88, 61);"><span style="color: rgb(255, 88, 61); font-size: 1.2em;"><br></span></h2><h2><span style="font-size: 1.2em;"></span><span style="color: rgb(255, 88, 61); font-size: 1.2em;"></span><span style="color: rgb(255, 88, 61); font-size: 1.2em;"></span><br></h2><p><span style="color: rgb(255, 88, 61); font-size: 1.2em;text-align:center">' +
					s_page_content + '</span></p></div>'
				var html_content = escape2Html(str);

				$(".div_s_page_zx").html(html_content); //初始化加载内容 
				$(".div_s_page_height").html(html_content); //初始化复制内容，撑开文档高度 
			}

			function load_random_content() {
				//console.log('load_random_content');
				var random_content =
					"&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h2 style=&quot;color: rgb(255, 88, 61); font-weight: 800;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;送给你的小惊喜&lt;/h2&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;" +
					random_text() +
					"&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=&quot;child-node-is-img&quot; contenteditable=&quot;false&quot;&gt;&lt;img src=&quot;" +
					random_img() +
					"&quot; width=&quot;100%&quot; height=&quot;auto&quot; id=&quot;zxeditor_img_1570285474432&quot;&gt;&lt;i class=&quot;__remove&quot;&gt;&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;" +
					random_text() + "&lt;/p&gt;&lt;p class=&quot;child-node-is-text&quot;&gt;" + random_text() +
					"&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=&quot;child-node-is-img&quot; contenteditable=&quot;false&quot;&gt;&lt;img src=&quot;" +
					random_img() +
					"&quot; width=&quot;100%&quot; height=&quot;auto&quot; id=&quot;zxeditor_img_1570409946707&quot;&gt;&lt;i class=&quot;__remove&quot;&gt;&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=&quot;child-node-is-text&quot;&gt;" +
					random_text() +
					"&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=&quot;child-node-is-text&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; " +
					"——爱你的小鹿" + "&lt;/p&gt;";
				var html_content = escape2Html(random_content);
				$(".div_s_page_zx").html(html_content); //初始化加载内容 
				$(".div_s_page_height").html(html_content); //初始化复制内容，撑开文档高度
			}


			//转义为html
			function escape2Html(str) {
				var arrEntities = {
					'lt': '<',
					'gt': '>',
					'nbsp': ' ',
					'amp': '&',
					'quot': '"'
				};
				return str.replace(/&(lt|gt|nbsp|amp|quot);/ig, function(all, t) {
					return arrEntities[t];
				});
			}

			var temp_text_array = array_as_words_love;

			function random_text() {
				var random_text_index = Math.floor(Math.random() * temp_text_array.length);
				var random_text = temp_text_array[random_text_index];
				temp_text_array.splice(random_text_index, 1);
				return random_text;
			}
			var temp_img_array = array_as_pics_s;

			function random_img() {
				var random_img_index = Math.floor(Math.random() * temp_img_array.length);
				var random_img = temp_img_array[random_img_index];
				temp_img_array.splice(random_img_index, 1);
				return random_img;
			}


			function init_pure_words() {
				//允许内容为空时直接展示，不设置为随机内容，用于空主题
				if (typeof(pure_words_content) == 'undefined') { //处理全新作品
					var array_str_temp = [];
					random_text_array(array_str_temp, 12); //获取随机的模板文字
					// array_str_temp.push('你现在看到的只是案例，文字是可以自定义哒，6000字以下');
					pure_words_content = array_str_temp.join('\r\r');
				}
				$(".div_pure_words_height").html(pure_words_content + '22222'); //初始化复制内容，撑开文档高度            

				// 初始化设置div的bg图片 初始化设置div的bg图片
				if (typeof(theme_content['bg_style_pure_words']) != 'undefined' && theme_content['bg_style_pure_words'] ==
					'bg_opacity') {
					if (typeof(theme_content['bg_img']) != 'undefined' && theme_content['bg_img'] != '') {
						$(".div_pure_words_bg").css({
							"background-image": "url(" + theme_content['bg_img'] + ")"
						});
					}
				}

				//以下是打字效果的js 
				if (typeof(theme_content['cursor_char']) != 'undefined' && theme_content['cursor_char'] != '') {
					switch (theme_content['cursor_char']) { //设置打字光标的样式
						case 'cursor_heart':
							str_cursorChar = '❤';
							break;
						case 'cursor_sub':
							str_cursorChar = '_';
							break;
						case 'cursor_music':
							str_cursorChar = '♫';
							break;
						case 'cursor_star':
							str_cursorChar = '★';
							break;
						case 'cursor_sun':
							str_cursorChar = '☀';
							break;
						default:
							str_cursorChar = '|';
					}
				} else { //处理全新作品，默认显示打字效果
					str_cursorChar = '❤';
				}

				//判断用户有没有选择打字效果
				if (typeof(theme_content['typed_bool']) != 'undefined' && theme_content['typed_bool'] != '') {
					typed_bool = theme_content['typed_bool'] == 'typed_y' ? true : false;
				} else {
					typed_bool = false; //默认显示打字效果
				}
				// console.log(typed_bool);

				display_pure_words();
				$(".div_pure_words").fadeIn();
				
				interval_pw_height = setInterval(function() {
					console.log('div_pure_words_height -> ' + $('.div_pure_words_height').height());
					var least_height_div_pw = $('.div_pure_words_height').height();
					if (least_height_div_pw > height_div_pw) {
						height_div_pw = least_height_div_pw;
					} else {
						clearInterval(interval_pw_height);
						$(".div_pure_words_height").height(least_height_div_pw + 100);
						if ($(".div_pure_words_height").height() < window_height) {
							$(".div_pure_words_height").height(window_height); //不能小于窗口的高度
							console.log('let us be high as window');
						}
					}
				}, 100);
			}


			function display_pure_words() {
				if (typed_bool) {
					var typed_pure_words = new Typed('#span_pw_typed', {
						strings: [pure_words_content], //输入内容, 支持html标签
						typeSpeed: 120, //打字速度
						cursorChar: str_cursorChar, //替换光标的样式
						contentType: 'html', //值为html时，将打印的文本标签直接解析html标签
						onComplete: function(abc) {
							// console.log(abc); 
							console.log('finished typing words');
							// console.log($('#span_pw_typed').height()-$(".div_pure_words_height").height());
						},
					});
				} else {
					//如果不需要打字效果就直接显示
					$("#span_pw_typed").html(pure_words_content).fadeIn();
				}
				init_attachment();
			}


			function random_text_array(temp_array, length) { //获取随机的模板文字
				console.log('random_text_array');
				var random_array = [];
				while (random_array.length < length) {
					// var random_num=Math.floor(Math.random()*(array_as_pics.length-0))+0;
					var random_num = Math.floor(Math.random() * (array_as_words_love.length)); //随机取值 
					if (random_array.indexOf(random_num) == -1) {
						random_array.push(random_num);
					}
				}
				// console.log(random_array);
				for (var i = 0; i < length; i++) {
					temp_array.push(array_as_words_love[random_array[i]]); //获取随机的模板文字
				}
			}
		</script>

		<!-- 按需加载，选择此片头时方才加载 -->
		<!-- <script src="http://3.wazf.top/js/start_intersect.js"></script> -->
		<script src="http://3.wazf.top/js/start_intersect.js"></script>

		<script src="http://3.wazf.top/static/js/jscex.min.js"></script>
		<script src="http://3.wazf.top/static/js/jscex-parser.js"></script>
		<script src="http://3.wazf.top/static/js/jscex-jit.js"></script>
		<script src="http://3.wazf.top/static/js/jscex-builderbase.min.js"></script>
		<script src="http://3.wazf.top/static/js/jscex-async.min.js"></script>
		<script src="http://3.wazf.top/static/js/jscex-async-powerpack.min.js"></script>
		<script src="http://3.wazf.top/static/js/love.js" charset="utf-8"></script>

		<script>
			if (tempRes.data.pageType == 1) {
				var start_content = {
					"intersect_text": "",
					"bg_style": "bg_custom",
					"bg_img": "",
					"img_bool": "img_true",
					"img_src": ""
				}; //可能为null

				// $(function() {
				//此事件为触发互动创意
				var start_id = 'intersect'; //可能为null
				let urlArr = location.pathname.split('#');
				var num = location.pathname.replace(/[^0-9]/ig, "");
				//console.log(num + "==========")
				var source = getQueryVariable("source");
				if (null != source && '' != source && undefined != typeof(source)) {

				} else {
					source = "";
				}
			} else {
				var start_content = {
					"hearttree_text": "\u6211\u77e5\u9053\u2764\r\n\u9047\u89c1\u4f60\u4e0d\u5bb9\u6613\u2764\ufe0f\r\n\u9519\u8fc7\u4e86\u4f1a\u5f88\u53ef\u60dc\u2764\ufe0f\r\n\u6211\u4e0d\u60f3\u4f59\u751f\u90fd\u662f\u56de\u5fc6\u2764\ufe0f\r\n\u6211\u60f3\u4f59\u751f\u6bcf\u5929\u90fd\u80fd\u770b\u89c1\u4f60\u2764\ufe0f\r\n\u6211\u7231\u4f60\u2764\ufe0f \r\n\u6211\u5e0c\u671b\u6211\u7684\u540d\u5b57\u4f1a\u662f\u4f60\u73b0\u5728\u62d2\u7edd\u522b\u4eba\u7684\u7406\u7531\u2764\ufe0f\r\n\u800c\u4f60\u7684\u540d\u5b57\u4f1a\u662f\u6211\u4e00\u751f\u4e2d\u542c\u8fc7\u6700\u7f8e\u7684\u8bdd\u2764\ufe0f",
					"hearttree_desc": "\u7231\u4f60\u4f6010000\u5e74",
					"hearttree_time": "10000-12-31",
					"hearttree_time_type": "hearttree_negative",
					"bg_img": "https://txmov2.a.yximgs.com/ufile/atlas/NTI0OTIyNjg4MTk4MzQ1NjYwOF8xNjEwMDgwMTYyMjUy_0.jpg",
					"img_src": "http:\/\/imgs.makusi.cn\/1164_200216175324.jpg",
					"intersect_text": "  \u672a\u8bc6\u59d1\u5a18\u524d\u53ea\u89c9\u5f97\u5929\u4e0b\u4e07\u7269\u98ce\u5149\u4ff1\u4e3a\u4e00\u8272\u5e78\u8bc6\u59d1\u5a18\u540e\u773c\u4e2d\u8fd8\u6709\u4ec0\u4e48\u4e07\u7269\u3002 \u59d1\u5a18\uff0c\u4f60\u7684\u7b11\u548c\u4f60\u7684\u6e29\u67d4\u6211\u90fd\u751a\u53cc\u559c\uff0c\u53ea\u662f\u59d1\u5a18\u4f60\u53ef\u5426\u4e0d\u5bf9\u522b\u5bb6\u516c\u5b50\u90a3\u4e48\u6e29\u67d4\uff0c\u4f60\u7684\u7b11\u53ef\u5426\u53ea\u7ed9\u6211\u4e00\u4eba",
					"cursor_char": "cursor_heart",
					"bg_style": "bg_simple",
					"img_bool": "img_true",
					"courage_h1": "\u5c81\u5c81\u5e38\u6b22\u6109\uff0c\u5e74\u5e74\u7686\u80dc\u610f",
					"courage_h2": "\u5e0c\u671b\u4eca\u5e74\uff0c\u591a\u5403\u4e0d\u80d6\uff0c\u79ef\u6781\u53c8\u5411\u4e0a",
					"courage_receiver": "\u65b0\u5e74\u5feb\u4e50",
					"courage_text": ["2020\u597d\u4e8b\u4e00\u4ef6\u63a5\u4e00\u4ef6\uff0c\u9f20\u4e0d\u80dc\u9f20",
						"\u8fd0\u6c14\u9f20\u4f60\uff0c\u6700\u65fa\u8eab\u4f53\u9f20\u4f60\u6700\u68d2",
						"\u989c\u503c\u9f20\u4f60\uff0c\u6700\u6f02\u4eae\u6700\u5e05\u4e8b\u4e1a\u9f20\u4f60\u6700\u8f89\u714c",
						"\u9f20\u4e0d\u5c3d\u7684\u5e78\u798f\uff0c\u9f20\u4e0d\u5c3d\u7684\u795d\u798f",
						"\u9f20\u4e0d\u5b8c\u7684\u94b1\uff0c\u9f20\u4e0d\u5b8c\u7684\u5feb\u4e50",
						"\u5fc3\u6709\u6240\u9f20\uff0c\u53ea\u9f20\u4e8e\u4f60\u2764\ufe0f"
					],
					"chase_title": "\u5c31\u51ed\u54b1\u4fe9\u7684\u5173\u7cfb \u6211\u5c31\u6562\u5728\u4f60\u7684\u751f\u547d\u91cc\u7316\u72c2\u4e00\u8f88\u5b50",
					"chase_text": "\u4e00\u8f88\u5b50\u9047\u5230\u4e00\u4e2a\u80fd\u966a\u4f60\u54ed\u3001\u966a\u4f60\u7b11\u3001\u966a\u4f60\u75af\u75af\u766b\u766b\u8d70\u4e00\u751f\u7684\u95fa\u871c\uff0c\u8db3\u77e3\uff0c\u613f\u65f6\u5149\u4e0d\u8001\uff0c\u6211\u4eec\u4e0d\u6563.",
					"chase_benefit": ["1.\u65e0\u8bba\u4f55\u65f6\uff0c\u4e92\u76f8\u966a\u4f34\uff0c\u4e0d\u79bb\u4e0d\u5f03.",
						"2.\u5c0a\u91cd\u5bf9\u65b9\u65e2\u4f7f\u6709\u4e86\u65b0\u670b\u53cb\u4e5f\u4e0d\u8981\u5ffd\u89c6\u5bf9\u65b9.",
						"3.\u6211\u4eec\u90fd\u6709\u5404\u81ea\u7684\u4e8b\uff0c\u65e0\u8bba\u591a\u4e45\u90fd\u4e0d\u80fd\u5fd8\u4e86\u5bf9\u65b9.",
						"4.\u4e0d\u8bb8\u6b3a\u9a97\u5bf9\u65b9\uff0c\u95fa\u871c\u7684\u5bf9\u65b9\u8981\u4fdd\u6301\u8ddd\u79bb.",
						"5.\u8981\u4e00\u8d77\u75af\u4e00\u8d77\u95f9\u5f00\u5fc3\u96be\u8fc7\u6211\u90fd\u966a\u4f60.",
						"6.\u53ef\u4ee5\u5435\u67b6\u4e0d\u80fd\u7edd\u4ea4.",
						"7.\u4e0d\u8bba\u4f60\u8d70\u5728\u54ea\u91cc\u6211\u90fd\u7ad9\u5728\u4f60\u770b\u5f97\u5230\u7684\u5730\u65b9.",
						"8.\u5728\u4f60\u4e0d\u723d\u7684\u65f6\u5019\u60f3\u559d\u9152\u65f6\u6211\u966a\u4f60\u4e00\u8d77\u9189.",
						"9.\u5c31\u7b97\u5927\u96e8\u8ba9\u65f6\u95f4\u503e\u5012\uff0c\u6211\u90fd\u4f1a\u7ed9\u4f60\u6000\u62b1.",
						"10.\u4f60\u4e0d\u7ba1\u7ecf\u5386\u591a\u5c11\u4eba\u805a\u805a\u6563\u6563\u5206\u5206\u5408\u5408\u4f60\u8981\u8bb0\u5f97\u6211\u4f1a\u6c38\u8fdc\u7559\u5728\u8fd9\u91cc\u7b49\u4f60."
					],
					"dbcake_question": "\u8bf7\u8f93\u5165\u4eca\u5929\u8fc7\u751f\u65e5\u7684\u5c0f\u53ef\u7231\u7684\u540d\u5b57",
					"dbcake_answer": "\u7b11\u7b11",
					"dbcake_title": "",
					"dbcake_wishes": "\u613f\u6240\u6709\u7684\u5feb\u4e50\uff0c\u6240\u6709\u7684\u597d\u8fd0\uff0c\u6240\u6709\u7684\u5e78\u798f\uff0c\u6240\u6709\u7684\u6e29\u99a8\uff0c\u6c38\u8fdc\u90fd\u56f4\u7ed5\u5728\u4f60\u8eab\u8fb9\uff01\u751f\u65e5\u5feb\u4e50",
					"loveformat_text": ""
				}; //可能为null
				console.log(start_content);

				var start_id;
				$(function() {
					//此事件为触发互动创意
					start_id = 'hearttree'; //可能为null
					init_start(start_id);
				});
			}

			console.log("=========", source)
			// $.ajax({
			// 	//url: "https://love.layzz.cn/qrcode/getContentById?source="+source+"&id=" + num,
			// 	url: "https://toutiaotest.cn.utools.club/qrcode/getV2ContentById?source=301&contentId=2",
			// 	async: false,

			// 	success: function(res) {
			console.log(tempRes);
			start_content.intersect_text = tempRes.data.content;
			start_content.hearttree_text = tempRes.data.content;
			start_content.img_src = tempRes.data.img;

			if (tempRes.data.img == null || tempRes.data.img == "") {
				$("#div_is_img").css("display", "none!important");
			}
			start_content.bg_img = tempRes.data.backgroundImg;
			start_content.skip = tempRes.data.skip;
			theme_content.simple_page_content = tempRes.data.nextContent;
			theme_content.printIcon = tempRes.data.printIcon;
			music_json.m_online_url = tempRes.data.music;
			
			var pure_words_content = theme_content['simple_page_content'];
			//console.log("=====================" + music_json.m_online_url)
			document.title = tempRes.data.title;
			$('#moreLink').attr('href', tempRes.data.link);

			$("#span_is_typed").css({
				"font-size": tempRes.data.fontSize + "px",
				"color": tempRes.data.color
			})
			//console.log($('#moreLink'))
			init_start(start_id);
			// 	}
			// });
			// });

			function getQueryVariable(variable) {
				var query = window.location.search.substring(1);
				var vars = query.split("&");
				for (var i = 0; i < vars.length; i++) {
					var pair = vars[i].split("=");
					if (pair[0] == variable) {
						return pair[1];
					}
				}
				return (false);
			}


			function init_start(start_id) {
				//console.log('init_start ->' + start_id);
				switch (start_id) {
					case 'loveformat':
						$('.div_loveformat').show();
						init_loveformat();
						break;
					case 'hearttree':
						$('#div_hearttree').show();
						init_hearttree();
						break;
					case 'courage':
						$('#div_courage').show();
						init_courage();
						break;
					case 'birthdaycake':
						$('#div_dbcake').show();
						init_birthdaycake();
						break;
					case 'intersect':
						$('#div_intersect').show();
						init_intersect();
						break;
					case 'onlyyou':
						$('#div_onlyyou').show();
						init_onlyyou();
						break;
					default:
						init_theme();
				}
			}

			//开始动画主体部分
			function init_theme() {
				//	console.log('init_theme');
				$('#div_start_bg').fadeOut();
				if(tempRes.data.pageType ==1){
					init_simple_page();
				} else {
					init_pure_words();
				}
			}

			//获取url中的参数
			function getUrlParam(name) {
				var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
				var r = window.location.search.substr(1).match(reg); //匹配目标参数
				if (r != null) return unescape(r[2]);
				return null; //返回参数值
			}
		</script>
		<script src="http://3.wazf.top/static/js/start_hearttree.js"></script>
		<script>
			var attachment = 'null'; //可能为null
			var attached_content = {
				"bool_save": false,
				"timer_desc": "\u7231\u4f601000\u5e74",
				"timer_time": "10000-01-01",
				"timer_count_type": "timer_count_postive"
			}; //可能为null
			//	console.log(attached_content);

			function init_attachment() { //开始attachment
				//	console.log('init_attachment ->' + attachment);
				switch (attachment) {
					case 'timer':
						init_at_timer();
						break;
					default:
						return;
				}
			}
		</script>
		<script src='http://3.wazf.top/js/jweixin-1.6.0.js'></script>
		<script src='http://3.wazf.top/js/theme_common.js'></script>

	</body>

</html>
