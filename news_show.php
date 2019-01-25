<?php
include_once "php/connect.php";
$page = "news";

if (isset($_POST["news_id"])) {
    $news_id = $_POST["news_id"];
}

if (isset($_GET["news_id"])) {
    $news_id = $_GET["news_id"];
}

//本条新闻内容
$sql_hot = "SELECT * FROM news WHERE news_id='{$news_id}'";
$result = mysqli_query($link, $sql_hot);

while ($row = mysqli_fetch_assoc($result)) {
    $show_news_class = $row["news_class"];
    $showClass = $show_news_class;
    $show_news_title = $row["news_title"];
    $show_news_click = $row["news_click"];
    $show_news_all = $row["news_all"];
    $show_news_addtime = date("Y/m/d h:i:s",strtotime($row["news_addtime"]));
    //伪静态?
    $show_news_url = "news_show.php?news_id=" . $news_id;
}

//关键词 标题 description
$sql_key = "SELECT * FROM page WHERE page_class='{$page}_{$website}'";

$result = mysqli_query($link, $sql_key);

while ($row = mysqli_fetch_assoc($result)) {
    $page_title = $row["page_title"];
    $page_keywords = $row["page_keywords"];
    $page_description = $row["page_description"];
}
//点击数+1
$show_news_click = $show_news_click + 1;
$sql_click = "UPDATE news SET news_click={$show_news_click} WHERE news_id='{$news_id}'";
$result = mysqli_query($link, $sql_click);

//上一条新闻
$sql_prev="SELECT * FROM news WHERE news_id<{$news_id} AND news_class='{$show_news_class}' ORDER BY news_id DESC LIMIT 1";
$result=mysqli_query($link, $sql_prev);
while ($row=mysqli_fetch_assoc($result)){
    $prev_news_id=$row["news_id"];
    $prev_news_url="news_show.php?news_id=".$row["news_id"];
    $prev_news_title=$row["news_title"];
}
if ((isset($prev_news_id)==false)){
    $prev_news_id="无内容";
    $prev_news_url="";
    $prev_news_title="没有了";
}


//下一条新闻
$sql_next="SELECT * FROM news WHERE news_id>{$news_id} AND news_class='{$show_news_class}' ORDER BY news_id ASC LIMIT 1";
$result=mysqli_query($link, $sql_next);
while ($row=mysqli_fetch_assoc($result)){
    $next_news_id=$row["news_id"];
    $next_news_url="news_show.php?news_id=".$row["news_id"];
    $next_news_title=$row["news_title"];
}

if ((isset($next_news_id)==false)){
    $next_news_id="无内容";
    $next_news_url="";
    $next_news_title="没有了";
}
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
		<title><?php echo $show_news_title;?> - <?php echo $page_title;?></title>
		<meta name="keywords" content="<?php echo $page_keywords;?>" />
		<meta name="description" content="<?php echo $page_description;?>">	
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
			<img src="images/news-ban1.png" class="icon1">
			<img src="images/news-ban2.png" class="icon2">
			<div class="container">
				<div class="word">
					<h3>News</h3>
					<p>瞭望实事，获悉最新动态</p>
				</div>
				<div class="down">
					<a href="#brand"><img src="images/down.gif"></a>
				</div>
			</div>
		</div>
		<!--ny-banner end-->

		<!--brand-nav-->
		<?php include_once "php/news/news_nav.php";?>
		<!--brand-nav end-->

		<div class="banner-c">
			<img src="images/banner-c.jpg">
		</div>

		<div class="news-detailed w-1240">
			<h1><?php echo $show_news_title;?></h1>
			<div class="time">
				<span><?php echo $show_news_addtime;?></span>
				<span><?php echo $show_news_click;?></span>
			</div>
			<div class="detailed">
				<?php echo $show_news_all;?>
			</div>
			<div class="next">
				<a href="<?php echo $prev_news_url;?>"><?php echo $prev_news_title;?></a>
				<a href="<?php echo $next_news_url;?>"><?php echo $next_news_title;?></a>
			</div>
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

	</body>

</html>

<?php
mysqli_close($link);
?>