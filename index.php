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
		<div class="banner">
			<div class="swiper-container ban">
				<div class="swiper-wrapper">
					<div class="swiper-slide bg1"></div>
					<div class="swiper-slide bg2"></div>
					<div class="swiper-slide bg3"></div>
					<div class="swiper-slide bg4"></div>
					<div class="swiper-slide bg5"></div>
				</div>
			</div>
			<div class="swiper-pagination ban-c"></div>
		</div>
		<!--banner end-->

		<!--brand-->
		<div class="brand container">
			<ul>
				<li>
					<div class="fl brand-word ml180">
						<img src="images/lht-logo.png">
						<h3>2018</h3>
						<p>清蝉龙虎堂黑糖尚饮主义，坚持手工熬制黑糖 特选特制Q弹波霸珍珠拼配国人口味咖啡豆， 将传统工艺与创新融合进行融合为年轻客群 带来“好咖好欧包”的美好体验!
						</p>
						<a href="" class="dj"><span>MORE</span></a>
					</div>
					<div class="fr brand-pic">
						<div class="swiper-container lht">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="images/lht.jpg">
								</div>
								<div class="swiper-slide">
									<img src="images/lht.jpg">
								</div>
								<div class="swiper-slide">
									<img src="images/lht.jpg">
								</div>
							</div>
							<div class="swiper-pagination lht-c"></div>
						</div>
					</div>
				</li>

				<li class="ml200">
					<div class="fl brand-pic">
						<div class="swiper-container mywm">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="images/mywm.jpg">
								</div>
								<div class="swiper-slide">
									<img src="images/mywm.jpg">
								</div>
								<div class="swiper-slide">
									<img src="images/mywm.jpg">
								</div>

							</div>
							<div class="swiper-pagination mywm-c"></div>
						</div>
					</div>
					<div class="fr brand-word mr180">
						<img src="images/mywm-logo.png">
						<h3>2018</h3>
						<p>喵右卫门咖饮，融合咖啡的健康、轻食的便捷于 一身，以健康天然的食材原料为根本，独有的 “咖啡+轻食”经营模式，打造令人身心愉悦的 餐饮文化!
						</p>
						<a href="" class="dj"><span>MORE</span></a>

					</div>
				</li>

				<li>
					<div class="fl brand-word ml180">
						<img src="images/lw-logo.png">
						<h3>2018</h3>
						<p>清蝉龙虎堂黑糖尚饮主义，坚持手工熬制黑糖 特选特制Q弹波霸珍珠拼配国人口味咖啡豆， 将传统工艺与创新融合进行融合为年轻客群 带来“好咖好欧包”的美好体验!
						</p>
						<a href="" class="dj"><span>MORE</span></a>
					</div>
					<div class="fr brand-pic">
						<div class="swiper-container lw">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="images/lht.jpg">
								</div>
								<div class="swiper-slide">
									<img src="images/lht.jpg">
								</div>
								<div class="swiper-slide">
									<img src="images/lht.jpg">
								</div>
							</div>
							<div class="swiper-pagination lw-c"></div>
						</div>
					</div>
				</li>

				<li class="ml200">
					<div class="fl brand-pic">
						<div class="swiper-container dc">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="images/mywm.jpg">
								</div>
								<div class="swiper-slide">
									<img src="images/mywm.jpg">
								</div>
								<div class="swiper-slide">
									<img src="images/mywm.jpg">
								</div>

							</div>
							<div class="swiper-pagination dc-c"></div>
						</div>
					</div>
					<div class="fr brand-word mr180">
						<img src="images/dc-logo.png">
						<h3>2018</h3>
						<p>喵右卫门咖饮，融合咖啡的健康、轻食的便捷于 一身，以健康天然的食材原料为根本，独有的 “咖啡+轻食”经营模式，打造令人身心愉悦的 餐饮文化!
						</p>
						<a href="" class="dj"><span>MORE</span></a>

					</div>
				</li>

				<li>
					<div class="fl brand-word ml180">
						<img src="images/lw-logo.png">
						<h3>2018</h3>
						<p>清蝉龙虎堂黑糖尚饮主义，坚持手工熬制黑糖 特选特制Q弹波霸珍珠拼配国人口味咖啡豆， 将传统工艺与创新融合进行融合为年轻客群 带来“好咖好欧包”的美好体验!
						</p>
						<a href="" class="dj"><span>MORE</span></a>
					</div>
					<div class="fr brand-pic">
						<div class="swiper-container dc1">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="images/lht.jpg">
								</div>
								<div class="swiper-slide">
									<img src="images/lht.jpg">
								</div>
								<div class="swiper-slide">
									<img src="images/lht.jpg">
								</div>
							</div>
							<div class="swiper-pagination dc1-c"></div>
						</div>
					</div>
				</li>

			</ul>
		</div>
		<!--brand end-->

		<!--index-news-->
		<div class="index-news container">
			<h4>Latest dynamic<span>最新动态</span></h4>
			<div class="index-news1">
				<ul class="tab">
					<li class="on">
						<a href="javascript:void(0)"><img src="images/mywm-logo1.png"></a>
					</li>
					<li>
						<a href="javascript:void(0)"><img src="images/lht-logo1.png"></a>
					</li>
					<li>
						<a href="javascript:void(0)"><img src="images/lw-logo1.png"></a>
					</li>
					<li>
						<a href="javascript:void(0)"><img src="images/dc-logo1.png"></a>
					</li>
					<li>
						<a href="javascript:void(0)"><img src="images/mywm-logo1.png"></a>
					</li>
				</ul>
				<div class="news-list">
					<ul class="active">
						<li>
							<div class="word">
								<a href="">
									<h3>喜报！宁波市鄞州区、海曙区喵右卫门区域代理签约成功！</h3>
									<p>宁波鄞州和海曙区作为宁波重要的2个行政区域，董女士早已窥视已久，寻找机会爆发。董女士再考察喵右卫门后总部，立即决定拿下宁波2个区域的代理资...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news1.jpg">
								</a>
							</div>
						</li>
						<li>
							<div class="word">
								<a href="">
									<h3>继美国路演大获成功后，喵咖上演代理商签约热潮!</h3>
									<p>12月15日，喵右卫门总部市场部负责人一行现身美国洛杉矶，进行公开路演，喵咖项目大获成功。喵右卫门咖饮热潮持续至这周，美国代理商火爆...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news2.jpg">
								</a>
							</div>
						</li>
						<li>
							<div class="word">
								<a href="">
									<h3>喵右卫门咖饮美国洛杉矶路演，完美收官！</h3>
									<p>寒冷的冬天，也掩盖不住喵咖全体工作人员激动万分的心情！就在刚刚，市场部传来捷报，喵右卫门咖饮（以下简称“喵咖”）项目美国路演大获成功！12月15...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news3.jpg">
								</a>
							</div>
						</li>
						<li>
							<div class="word">
								<a href="">
									<h3>希腊招商总局考察喵右卫门咖啡加盟总部，初步达成合作。</h3>
									<p>12月12日，希腊招商总局局长带领团队远从欧洲而来，带着满腔热情亲临喵咖总部，经过上午的洽谈，和详细考察，先后参观喵右卫门咖啡研发中心、仓库发货基...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news4.jpg">
								</a>
							</div>
						</li>
						<div class="clearfix"></div>
						<a href="" class="more"><img src="images/more.png"></a>
					</ul>

					<ul>
						<li>
							<div class="word">
								<a href="">
									<h3>喜报！宁波市鄞州区、海曙区喵右卫门区域代理签约成功！</h3>
									<p>宁波鄞州和海曙区作为宁波重要的2个行政区域，董女士早已窥视已久，寻找机会爆发。董女士再考察喵右卫门后总部，立即决定拿下宁波2个区域的代理资...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news1.jpg">
								</a>
							</div>
						</li>
						<li>
							<div class="word">
								<a href="">
									<h3>继美国路演大获成功后，喵咖上演代理商签约热潮!</h3>
									<p>12月15日，喵右卫门总部市场部负责人一行现身美国洛杉矶，进行公开路演，喵咖项目大获成功。喵右卫门咖饮热潮持续至这周，美国代理商火爆...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news2.jpg">
								</a>
							</div>
						</li>
						<li>
							<div class="word">
								<a href="">
									<h3>喵右卫门咖饮美国洛杉矶路演，完美收官！</h3>
									<p>寒冷的冬天，也掩盖不住喵咖全体工作人员激动万分的心情！就在刚刚，市场部传来捷报，喵右卫门咖饮（以下简称“喵咖”）项目美国路演大获成功！12月15...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news3.jpg">
								</a>
							</div>
						</li>
						<li>
							<div class="word">
								<a href="">
									<h3>希腊招商总局考察喵右卫门咖啡加盟总部，初步达成合作。</h3>
									<p>12月12日，希腊招商总局局长带领团队远从欧洲而来，带着满腔热情亲临喵咖总部，经过上午的洽谈，和详细考察，先后参观喵右卫门咖啡研发中心、仓库发货基...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news4.jpg">
								</a>
							</div>
						</li>
						<div class="clearfix"></div>
						<a href="" class="more"><img src="images/more.png"></a>
					</ul>

					<ul>
						<li>
							<div class="word">
								<a href="">
									<h3>喜报！宁波市鄞州区、海曙区喵右卫门区域代理签约成功！</h3>
									<p>宁波鄞州和海曙区作为宁波重要的2个行政区域，董女士早已窥视已久，寻找机会爆发。董女士再考察喵右卫门后总部，立即决定拿下宁波2个区域的代理资...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news1.jpg">
								</a>
							</div>
						</li>
						<li>
							<div class="word">
								<a href="">
									<h3>继美国路演大获成功后，喵咖上演代理商签约热潮!</h3>
									<p>12月15日，喵右卫门总部市场部负责人一行现身美国洛杉矶，进行公开路演，喵咖项目大获成功。喵右卫门咖饮热潮持续至这周，美国代理商火爆...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news2.jpg">
								</a>
							</div>
						</li>
						<li>
							<div class="word">
								<a href="">
									<h3>喵右卫门咖饮美国洛杉矶路演，完美收官！</h3>
									<p>寒冷的冬天，也掩盖不住喵咖全体工作人员激动万分的心情！就在刚刚，市场部传来捷报，喵右卫门咖饮（以下简称“喵咖”）项目美国路演大获成功！12月15...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news3.jpg">
								</a>
							</div>
						</li>
						<li>
							<div class="word">
								<a href="">
									<h3>希腊招商总局考察喵右卫门咖啡加盟总部，初步达成合作。</h3>
									<p>12月12日，希腊招商总局局长带领团队远从欧洲而来，带着满腔热情亲临喵咖总部，经过上午的洽谈，和详细考察，先后参观喵右卫门咖啡研发中心、仓库发货基...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news4.jpg">
								</a>
							</div>
						</li>
						<div class="clearfix"></div>
						<a href="" class="more"><img src="images/more.png"></a>
					</ul>

					<ul>
						<li>
							<div class="word">
								<a href="">
									<h3>喜报！宁波市鄞州区、海曙区喵右卫门区域代理签约成功！</h3>
									<p>宁波鄞州和海曙区作为宁波重要的2个行政区域，董女士早已窥视已久，寻找机会爆发。董女士再考察喵右卫门后总部，立即决定拿下宁波2个区域的代理资...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news1.jpg">
								</a>
							</div>
						</li>
						<li>
							<div class="word">
								<a href="">
									<h3>继美国路演大获成功后，喵咖上演代理商签约热潮!</h3>
									<p>12月15日，喵右卫门总部市场部负责人一行现身美国洛杉矶，进行公开路演，喵咖项目大获成功。喵右卫门咖饮热潮持续至这周，美国代理商火爆...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news2.jpg">
								</a>
							</div>
						</li>
						<li>
							<div class="word">
								<a href="">
									<h3>喵右卫门咖饮美国洛杉矶路演，完美收官！</h3>
									<p>寒冷的冬天，也掩盖不住喵咖全体工作人员激动万分的心情！就在刚刚，市场部传来捷报，喵右卫门咖饮（以下简称“喵咖”）项目美国路演大获成功！12月15...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news3.jpg">
								</a>
							</div>
						</li>
						<li>
							<div class="word">
								<a href="">
									<h3>希腊招商总局考察喵右卫门咖啡加盟总部，初步达成合作。</h3>
									<p>12月12日，希腊招商总局局长带领团队远从欧洲而来，带着满腔热情亲临喵咖总部，经过上午的洽谈，和详细考察，先后参观喵右卫门咖啡研发中心、仓库发货基...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news4.jpg">
								</a>
							</div>
						</li>
						<div class="clearfix"></div>
						<a href="" class="more"><img src="images/more.png"></a>
					</ul>

					<ul>
						<li>
							<div class="word">
								<a href="">
									<h3>喜报！宁波市鄞州区、海曙区喵右卫门区域代理签约成功！</h3>
									<p>宁波鄞州和海曙区作为宁波重要的2个行政区域，董女士早已窥视已久，寻找机会爆发。董女士再考察喵右卫门后总部，立即决定拿下宁波2个区域的代理资...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news1.jpg">
								</a>
							</div>
						</li>
						<li>
							<div class="word">
								<a href="">
									<h3>继美国路演大获成功后，喵咖上演代理商签约热潮!</h3>
									<p>12月15日，喵右卫门总部市场部负责人一行现身美国洛杉矶，进行公开路演，喵咖项目大获成功。喵右卫门咖饮热潮持续至这周，美国代理商火爆...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news2.jpg">
								</a>
							</div>
						</li>
						<li>
							<div class="word">
								<a href="">
									<h3>喵右卫门咖饮美国洛杉矶路演，完美收官！</h3>
									<p>寒冷的冬天，也掩盖不住喵咖全体工作人员激动万分的心情！就在刚刚，市场部传来捷报，喵右卫门咖饮（以下简称“喵咖”）项目美国路演大获成功！12月15...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news3.jpg">
								</a>
							</div>
						</li>
						<li>
							<div class="word">
								<a href="">
									<h3>希腊招商总局考察喵右卫门咖啡加盟总部，初步达成合作。</h3>
									<p>12月12日，希腊招商总局局长带领团队远从欧洲而来，带着满腔热情亲临喵咖总部，经过上午的洽谈，和详细考察，先后参观喵右卫门咖啡研发中心、仓库发货基...</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="">
									<img src="images/news4.jpg">
								</a>
							</div>
						</li>
						<div class="clearfix"></div>
						<a href="" class="more"><img src="images/more.png"></a>
					</ul>
				</div>
			</div>
			<script type="text/javascript">
				$(function() {  
					$(".tab li").off("click").on("click", function() {    
						var index = $(this).index();    
						$(this).addClass("on").siblings().removeClass("on");    
						$(".news-list ul").eq(index).addClass("active").siblings().removeClass("active");   
					}); 
				});
			</script>
			<div class="clearfix"></div>
		</div>

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