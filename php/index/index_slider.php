<?php
$img_class = "index_slider";

$sql_img = "SELECT * FROM img WHERE class='{$img_class}' AND website='{$website}'";
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
		<div class="banner">
			<div class="swiper-container ban">
				<div class="swiper-wrapper">
<?php
//echo $imgArr[0]["img_url"];
for ($j = 0; $j < 5; $j++) {
    echo <<< EOT
                    <div style="background:url({$imgArr[$j]["img_url"]}) no-repeat;background-size:cover;" class="swiper-slide"></div>

EOT;
}
?>
				</div>
			</div>
			<div class="swiper-pagination ban-c"></div>
		</div>
