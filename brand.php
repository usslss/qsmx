<?php
include_once "php/connect.php";
$page = "brand";
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

		<!--ny-banner-->
		<div class="ny-banner">
			<img src="images/brand-ban1.png" class="icon1">
			<img src="images/brand-ban2.png" class="icon2">
			<div class="container">
				<div class="word">
					<h3>Successful Brand</h3>
					<p>人之所以能，是相信能</p>
				</div>
				<div class="down">
					<a href="#brand"><img src="images/down.gif"></a>
				</div>
			</div>
		</div>
		<!--ny-banner end-->

		<!--brand-nav-->
		<?php include_once "php/brand/brand_nav.php";?>	

		<!--brand-nav end-->

		<?php include_once "php/banner.php";?>
		
		<?php include_once "php/brand/brand_show.php";?>	


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

	</body>

</html>

<?php
mysqli_close($link);
?>