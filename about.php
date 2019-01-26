<?php
include_once "php/connect.php";
$page = "about";
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
			<img src="images/about-ban1.png" class="icon1">
			<img src="images/about-ban2.png" class="icon2">
			<div class="container">
				<div class="word">
					<h3>About Us</h3>
					<p>想法决定行动，行动决定结果</p>
				</div>
				<div class="down">
					<a href="#about"><img src="images/down.gif"></a>
				</div>
			</div>
		</div>
		<!--ny-banner end-->

		<!--about-company-->
		<div class="about-company w-1240" id="about">
			<div class="fl">
				<div class="about-title">
					<h3>Company Profile</h3>
					<span>公司简介</span>
				</div>
				<p>杭州奇思妙想餐饮品牌管理有限公司注册于2018年，是国内一家集餐饮业咨询管理、原物料源头生产提供到品牌门店终端消费为一体的综合性。企业隶属于拥有18年餐饮经验的博多集团，在产品运营上有着多年丰富经验！</p>
			</div>
			<div class="fr">
				<img src="images/about.jpg">
			</div>
			<div class="clearfix"></div>
		</div>
		<!--about-company end-->

		<!--about-brand-->
		<?php include_once "php/about/about_brand.php";?>
		<!--about-brand end-->

		<!--about-cooperation-->
		<div class="about-cooperation w-1240">
			<div class="about-title">
				<h3>Strategic Cooperation</h3>
				<span>战略合作</span>
			</div>
			<ul>
				<li>
					<img src="images/hz1.png">
				</li>
				<li>
					<img src="images/hz2.png">
				</li>
				<li>
					<img src="images/hz3.png">
				</li>
				<li>
					<img src="images/hz4.png">
				</li>
				<li>
					<img src="images/hz5.png">
				</li>
				<li>
					<img src="images/hz6.png">
				</li>
				<li>
					<img src="images/hz7.png">
				</li>
				<li>
					<img src="images/hz8.png">
				</li>
				<li>
					<img src="images/hz9.png">
				</li>
				<li>
					<img src="images/hz10.png">
				</li>
				<li>
					<img src="images/hz11.png">
				</li>
				<li>
					<img src="images/hz12.png">
				</li>
				<div class="clearfix"></div>
			</ul>
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
			$(function () { 
				$(".ny-banner .icon1").addClass("active");
				$(".ny-banner .icon2").addClass("active");
			});
		</script>


	</body>

</html>

<?php
mysqli_close($link);
?>