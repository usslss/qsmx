<?php
$sql_brand = "SELECT * FROM brand WHERE brand_website='{$website}'";
$result = mysqli_query($link, $sql_brand);
$i = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $newsNavArr[$i]["brand_name"] = $row["brand_name"];
    $newsNavArr[$i]["brand_logo_url"] = $row["brand_logo_mini_url"];

    $sql_brand_news = "SELECT * FROM news WHERE news_class='{$newsNavArr[$i]["brand_name"]}' AND news_website='{$website}' ORDER BY news_addtime DESC";
    $result2 = mysqli_query($link, $sql_brand_news);
    $j = 0;

    while ($row = mysqli_fetch_assoc($result2)) {
        $newsArr[$i][$j]["news_id"] = $row["news_id"];
        $newsArr[$i][$j]["news_title"] = $row["news_title"];
        $newsArr[$i][$j]["news_summary"] = $row["news_summary"];
        $newsArr[$i][$j]["news_img_url"] = $row["news_img_url"];
        //根据伪静态的定义重写转向url
        $newsArr[$i][$j]["news_url"] = "news_show.php?news_id=" . $row["news_id"];
        $j++;
    }
    $i++;
}

?>

		<div class="index-news container">
			<h4>Latest news<span>最新动态</span></h4>
			<div class="index-news1">
				<ul class="tab">
					<li class="on">
						<a href="javascript:void(0)"><img src="<?php echo $newsNavArr[0]["brand_logo_url"]; ?>"></a>
					</li>
<?php

for ($i = 1; $i < 5; $i++) {
    echo <<< EOT
					<li>
						<a href="javascript:void(0)"><img src="{$newsNavArr[$i]["brand_logo_url"]}"></a>
					</li>
EOT;
}

?>
				</ul>
				<div class="news-list">
					<ul class="active">
<?php

for ($i = 0; $i < 4; $i++) {
    echo <<< EOT
						<li>
							<div class="word">
								<a href="{$newsArr[0][$i]["news_url"]}" target="_blank">
									<h3>{$newsArr[0][$i]["news_title"]}</h3>
									<p>{$newsArr[0][$i]["news_summary"]}</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="{$newsArr[0][$i]["news_url"]}" target="_blank">
									<img src="{$newsArr[0][$i]["news_img_url"]}">
								</a>
							</div>
						</li>
EOT;
}

?>
						<div class="clearfix"></div>
						<a href="news.php?class=<?php echo $newsNavArr[0]["brand_name"]; ?>" target="_blank" class="more"><img src="images/more.png"></a>
					</ul>
<?php

for ($i = 1; $i < 5; $i++) {
    echo <<< EOT
					<ul>
EOT;
    for ($j = 0; $j < 4; $j++) {
        echo <<< EOT
						<li>
							<div class="word">
								<a href="{$newsArr[$i][$j]["news_url"]}" target="_blank">
									<h3>{$newsArr[$i][$j]["news_title"]}</h3>
									<p>{$newsArr[$i][$j]["news_summary"]}</p>
									<span>NEWS</span>
								</a>
							</div>
							<div class="img">
								<a href="{$newsArr[$i][$j]["news_url"]}" target="_blank">
									<img src="{$newsArr[$i][$j]["news_img_url"]}">
								</a>
							</div>
						</li>
EOT;
    }
    echo <<< EOT

						<div class="clearfix"></div>
						<a href="news.php?class={$newsNavArr[$i]["brand_name"]}" class="more" target="_blank"><img src="images/more.png"></a>
					</ul>
EOT;

}

?>


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