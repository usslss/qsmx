<?php

//按照时间顺序搜索 新闻

if($showBrand=="all"){
	$sql_brand = "SELECT * FROM brand WHERE brand_website='{$website}' ORDER BY brand_id ASC LIMIT 1 ";
}else{
	$sql_brand = "SELECT * FROM brand WHERE brand_name='{$showBrand}' AND brand_website='{$website}'";
}

$result = mysqli_query($link, $sql_brand);

while ($row = mysqli_fetch_assoc($result)) {
    $show_name = $row["brand_name"];
    $show_text= mb_substr($row["brand_text"],0,84);
    $show_logo_url = $row["brand_logo_url"];
    $show_brand_url= $row["brand_url"];
    $show_brand_year = substr($row["brand_year"],0,4);
	$showBrand=$show_name;
}

$sql_img = "SELECT * FROM img WHERE class='{$showBrand}' AND website='{$website}'";
$result = mysqli_query($link, $sql_img);
$i = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $imgArr[$i]["img_url"] = $row["url"];
    $imgArr[$i]["img_alt"] = $row["alt"];

    //根据伪静态的定义重写转向url
    //$imgArr[$i]["img_href"] = "news_show.php?news_id=".$row["news_id"];
    $i++;
}



?>
		<div class="brand-banner">
			<div class="fl brand-pic">
				<div class="swiper-container mywm">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="<?php echo $imgArr[0]["img_url"];?>">
						</div>
						<div class="swiper-slide">
							<img src="<?php echo $imgArr[1]["img_url"];?>">
						</div>
						<div class="swiper-slide">
							<img src="<?php echo $imgArr[2]["img_url"];?>">
						</div>
					</div>
					<div class="swiper-pagination mywm-c"></div>
				</div>
				
			</div>
			<div class="fr  brand-word">
				<img src="<?php echo $show_logo_url;?>">
				<h3><?php echo $show_brand_year;?></h3>
				<p><?php echo $show_text;?>
				</p>
				<a href="<?php echo $show_brand_url;?>" class="dj"><span>MORE</span></a>
			</div>
		</div>

