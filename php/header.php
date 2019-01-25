<?php 

$class_index="";
$class_about="";
$class_brand="";
$class_news="";
$class_contact="";

if ($page=='index'){$class_index="active";};
if ($page=='about'){$class_about="active";};
if ($page=='brand'){$class_brand="active";};
if ($page=='news'){$class_news="active";};
if ($page=='contact'){$class_contact="active";};

?>
<!-- 移动适配JS脚本 -->
<!-- 
	<script type="text/javascript">
    if (window.location.toString().indexOf('pref=padindex') != -1) {
    } else {
        if (/AppleWebKit.*Mobile/i.test(navigator.userAgent) || /\(Android.*Mobile.+\).+Gecko.+Firefox/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))) {
            if (window.location.href.indexOf("?mobile")<0){
                try {
                    if (/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
                        window.location.href="/wap/<?php //echo $page;?>";
                    } else if (/iPad/i.test(navigator.userAgent)) {
                        //window.location.href="/wap/"
                    } else {
                        window.location.href="/wap/<?php //echo $page;?>"
                    }
                } catch (e) {}
            }
        }
    }
</script>
 --> 

		<div class="header">
			<div class="container">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png"></a>
				</div>
				<div class="nav">
					<ul>
						<li class="<?php echo $class_about;?>">
							<a href="about.php">关于我们</a>
						</li>
						<li class="<?php echo $class_brand;?>">
							<a href="brand.php">成功品牌</a>
						</li>
						<li class="<?php echo $class_news;?>">
							<a href="news.php">最新动态</a>
						</li>
						<li class="<?php echo $class_contact;?>">
							<a href="contact.php">联系方式</a>
						</li>
					</ul>
				</div>
				<div class="tel">
					<img src="images/tel.png">
				</div>
				<div class="clearfix"></div>
			</div>
		</div>


	