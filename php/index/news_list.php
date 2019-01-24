<?php

// 按时间顺序显示的条数
$news_shownum = 3;

//统计一下新闻条数
$sql_num = "SELECT count(*) FROM news WHERE news_website='{$website}'";
$news_sum = mysqli_fetch_array(mysqli_query($link, $sql_num));

//如果想显示的比实际的多,则只显示实际条数
if ($news_sum[0] < $news_shownum) {
    $news_shownum = $news_sum[0];
}

$sql_news = "SELECT * FROM news WHERE news_website='{$website}' ORDER BY news_addtime DESC LIMIT {$news_shownum}";
$result = mysqli_query($link, $sql_news);
$i = 0;

while (($row = mysqli_fetch_assoc($result)) & ($i < $news_shownum)) {
    $newsarr[$i]["news_id"] = $row["news_id"];
    $newsarr[$i]["news_title"] = $row["news_title"];
    $newsarr[$i]["news_summary"] = $row["news_summary"];
    $newsarr[$i]["news_img_url"] = $row["news_img_url"];
    $newsarr[$i]["news_addtime"] = substr($row["news_addtime"], 5, 5);
    //根据伪静态的定义重写转向url
    $newsarr[$i]["news_url"] = "news_show.php?news_id=" . $row["news_id"];

    $i++;
}

?>
		<div class="index_news">
			<div class="main p_title">
				<img src="picture/img_title2.png">
			</div>

			<div class="main row">
				<div class="clearfix">
					<a href="news.php" class="a_more">MORE</a>
				</div>
<?php
for ($i = 0; $i < $news_shownum; $i++) {
    //如果对标题的长度有限制
    //$news_title_short=mb_substr($newsarr[$i]["news_title"],0,22,'utf-8');
    echo <<< EOT
                <dl class="in_dl col-md-4">
					<dt><a target="_blank" href="{$newsarr[$i]["news_url"]}" title="{$newsarr[$i]["news_title"]}"><img src="{$newsarr[$i]["news_img_url"]}" alt="{$newsarr[$i]["news_title"]}"></a></dt>
					<dd>
						<a target="_blank" href="{$newsarr[$i]["news_url"]}" title="{$newsarr[$i]["news_title"]}">{$newsarr[$i]["news_title"]}</a>
					</dd>
					<dd class="dd1">{$newsarr[$i]["news_summary"]}</dd>
				</dl>
EOT;

}
?>
			</div>
		</div>