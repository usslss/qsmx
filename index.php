<?php
include_once "php/connect.php";
$page = "index";
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

	</head>

	<body>
		<!-- header -->
		<?php include_once "php/header.php";?>
		<!-- header end -->		
		
		<!--banner-->
		<?php include_once "php/index/index_slider.php";?>
		<!--banner end-->

		<!--brand-->
		<?php include_once "php/index/brand_list.php";?>
		<!--brand end-->

		<!--index-news-->
		<?php include_once "php/index/news_list.php";?>


		<!--partners-->
		<div class="partners">
			<div class="container">
				<h4>partners<span>合作伙伴</span></h4>
				<ul>
					<li><img src="images/hz1.png"></li>
					<li><img src="images/hz2.png"></li>
					<li><img src="images/hz3.png"></li>
					<li><img src="images/hz4.png"></li>
					<li><img src="images/hz5.png"></li>
					<li><img src="images/hz6.png"></li>
					<li><img src="images/hz7.png"></li>
					<li><img src="images/hz8.png"></li>
					<li><img src="images/hz9.png"></li>
					<li><img src="images/hz10.png"></li>
					<li><img src="images/hz11.png"></li>
					<li><img src="images/hz12.png"></li>
					<div class="clearfix"></div>
				</ul>
			</div>
		</div>

		<!--footer-->
		<?php include_once "php/footer.php";?>
			
		</div>

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

		<!--banner-->
		<script type="text/javascript">
			var swiper = new Swiper('.ban', {
				autoplay: {
					delay: 2500,
					disableOnInteraction: false,
				},
				pagination: {
					el: '.ban-c',
					clickable: true,
					renderBullet: function(index, className) {
						return '<span class="' + className + '"><image src="images/banner' + (index + 1) + '.jpg"></span>';
					},
				},
			});
			//鼠标覆盖停止自动切换
			swiper.el.onmouseover = function() {
				swiper.autoplay.stop();
			}
			swiper.el.onmouseleave = function() {
				swiper.autoplay.start();
			}
			var swiper1 = new Swiper('.lht', {
				autoplay: {
					delay: 2500,
					disableOnInteraction: false,
				},
				pagination: {
					el: '.lht-c',
					clickable: true,
					renderBullet: function(index, className) {
						return '<span class="' + className + '">' + "0" + (index + 1) + '</span>';
					},
				},
			});
			var swiper2 = new Swiper('.mywm', {
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
			var swiper3 = new Swiper('.lw', {
				autoplay: {
					delay: 2500,
					disableOnInteraction: false,
				},
				pagination: {
					el: '.lw-c',
					clickable: true,
					renderBullet: function(index, className) {
						return '<span class="' + className + '">' + "0" + (index + 1) + '</span>';
					},
				},
			});
			var swiper4 = new Swiper('.dc', {
				autoplay: {
					delay: 2500,
					disableOnInteraction: false,
				},
				pagination: {
					el: '.dc-c',
					clickable: true,
					renderBullet: function(index, className) {
						return '<span class="' + className + '">' + "0" + (index + 1) + '</span>';
					},
				},
			});
			var swiper5 = new Swiper('.dc1', {
				autoplay: {
					delay: 2500,
					disableOnInteraction: false,
				},
				pagination: {
					el: '.dc1-c',
					clickable: true,
					renderBullet: function(index, className) {
						return '<span class="' + className + '">' + "0" + (index + 1) + '</span>';
					},
				},
			});
		</script>
		
	</body>

</html>

<?php
mysqli_close($link);
?>