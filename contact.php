<?php
include_once "php/connect.php";
$page = "contact";
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta http-equiv="x-rim-auto-match" content="none" />
		<meta name="format-detection" content="telephone=no" />
		<?php include_once "php/keywords.php";?>
		<link rel="stylesheet" href="css/swiper.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script src="js/swiper.min.js"></script>
		<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>

	</head>

	<body>
		<!-- header -->
		<?php include_once "php/header.php";?>
		<!-- header end -->		

		<!--ny-banner-->
		<div class="ny-banner contact-c">
			<img src="images/contact-ban1.png" class="icon1">
			<img src="images/contact-ban2.png" class="icon2">
			<div class="container">
				<div class="word">
					<h3>Contact</h3>
					<p>书写未来宏图，立企业大愿</p>
				</div>
				<div class="down">
					<a href="#contact"><img src="images/down.gif"></a>
				</div>
			</div>
		</div>
		<!--ny-banner end-->
       
		<div class="contact w-1240" id="contact">
			<h3>中国·杭州</h3>
			<div class="map">
				<div class="fl">
					<dl>
						<dt style="font-family:DIN REGULAR;">Phone：</dt>
						<dd>400-0570-288</dd>
					</dl>
					<dl>
						<dt style="font-family: '微软雅黑';">我们的电子邮箱地址：</dt>
						<dd style="font-family:HelveticaNeueMed;">linraynet@yeah.net</dd>
					</dl>
					<dl><img src="images/map1.png"></dl>
					<p>浙江省杭州市余杭区姚家路5号蓝都科创园10号</p>
				</div>
				<div class="fr" id="dituContent"></div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<div class="messages w-1240">
			<h4>Online Message</h4>
			<p>您给我们多大信任，我们就给您多大惊喜</p>
			<div class="bd">
				<input type="text" placeholder="请告诉我们怎么称呼您!"/>
				<input type="text" placeholder="这里输入您的手机号码呀！"/>
			</div>
			<button>可以提交了！</button>
		</div>

		<!--footer-->
		<?php include_once "php/footer.php";?>

		<!--导航下拉-->
		<script type="text/javascript">
			$(document).scroll(function() {
				if($(this).scrollTop() > 94) {
					$(".header").addClass("fix");
				} else {
					$(".header").removeClass("fix");
				}
			});
		</script>

		<script type="text/javascript">
			$(function() {
				$(".ny-banner .icon1").addClass("active");
				$(".ny-banner .icon2").addClass("active");
			});
		</script>

		<script type="text/javascript">
			var swiper = new Swiper('.mywm', {
				autoplay: {
					delay: 2500,
					disableOnInteraction: false,
				},
				pagination: {
					el: '.mywm-c',
					clickable: true,
					renderBullet: function(index, className) {
						return '<span class="' + className + '">' + "0" + (index + 1) + '</span>';
					},
				},
			});
		</script>
		<!--地图-->
		<script type="text/javascript">
			//创建和初始化地图函数：
			function initMap() {
				createMap(); //创建地图
				setMapEvent(); //设置地图事件
				addMapControl(); //向地图添加控件
				addMarker(); //向地图中添加marker
			}

			//创建地图函数：
			function createMap() {
				var map = new BMap.Map("dituContent"); //在百度地图容器中创建一个地图
				var point = new BMap.Point(120.117696, 30.362506); //定义一个中心点坐标
				map.centerAndZoom(point, 15); //设定地图的中心点和坐标并将地图显示在地图容器中
				window.map = map; //将map变量存储在全局
			}

			//地图事件设置函数：
			function setMapEvent() {
				map.enableDragging(); //启用地图拖拽事件，默认启用(可不写)
				map.enableScrollWheelZoom(); //启用地图滚轮放大缩小
				map.enableDoubleClickZoom(); //启用鼠标双击放大，默认启用(可不写)
				map.enableKeyboard(); //启用键盘上下左右键移动地图
			}

			//地图控件添加函数：
			function addMapControl() {
				//向地图中添加缩放控件
				var ctrl_nav = new BMap.NavigationControl({
					anchor: BMAP_ANCHOR_TOP_LEFT,
					type: BMAP_NAVIGATION_CONTROL_LARGE
				});
				map.addControl(ctrl_nav);
				//向地图中添加比例尺控件
				var ctrl_sca = new BMap.ScaleControl({
					anchor: BMAP_ANCHOR_BOTTOM_LEFT
				});
				map.addControl(ctrl_sca);
			}

			//标注点数组
			var markerArr = [{
				title: "杭州奇思妙想餐饮品牌管理有限公司",
				content: "杭州市余杭区良渚高新技术产业园姚家路5号蓝都科创园10幢3层",
				point: "120.11051|30.362319",
				isOpen: 1,
				icon: {
					w: 23,
					h: 25,
					l: 46,
					t: 21,
					x: 9,
					lb: 12
				}
			}];
			//创建marker
			function addMarker() {
				for(var i = 0; i < markerArr.length; i++) {
					var json = markerArr[i];
					var p0 = json.point.split("|")[0];
					var p1 = json.point.split("|")[1];
					var point = new BMap.Point(p0, p1);
					var iconImg = createIcon(json.icon);
					var marker = new BMap.Marker(point, {
						icon: iconImg
					});
					var iw = createInfoWindow(i);
					var label = new BMap.Label(json.title, {
						"offset": new BMap.Size(json.icon.lb - json.icon.x + 10, -20)
					});
					marker.setLabel(label);
					map.addOverlay(marker);
					label.setStyle({
						borderColor: "#808080",
						color: "#333",
						cursor: "pointer"
					});

					(function() {
						var index = i;
						var _iw = createInfoWindow(i);
						var _marker = marker;
						_marker.addEventListener("click", function() {
							this.openInfoWindow(_iw);
						});
						_iw.addEventListener("open", function() {
							_marker.getLabel().hide();
						})
						_iw.addEventListener("close", function() {
							_marker.getLabel().show();
						})
						label.addEventListener("click", function() {
							_marker.openInfoWindow(_iw);
						})
						if(!!json.isOpen) {
							label.hide();
							_marker.openInfoWindow(_iw);
						}
					})()
				}
			}
			//创建InfoWindow
			function createInfoWindow(i) {
				var json = markerArr[i];
				var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>" + json.content + "</div>");
				return iw;
			}
			//创建一个Icon
			function createIcon(json) {
				var icon = new BMap.Icon("http://www.miaocafe.net/static/images/us_mk_icon.png", new BMap.Size(json.w, json.h), {
					imageOffset: new BMap.Size(-json.l, -json.t),
					infoWindowOffset: new BMap.Size(json.lb + 5, 1),
					offset: new BMap.Size(json.x, json.h)
				})
				return icon;
			}

			initMap(); //创建和初始化地图
		</script>
	</body>

</html>

<?php
mysqli_close($link);
?>