<?php

//单页显示的条数
$news_shownum = 6;
$page_shownum = $news_shownum;
//判断跳转的页数

if (isset($_GET["page"])) {
    $page_jump = $_GET["page"];
    $news_start = ($page_jump - 1) * ($news_shownum) + 1;
} else {
    $page_jump = 1;
    $news_start = 1;
}


//按照时间顺序搜索 新闻
if($showClass=="all"){
	$sql_new = "SELECT * FROM news WHERE news_website='{$website}' ORDER BY news_addtime DESC ";
}else{
	$sql_new = "SELECT * FROM news WHERE news_class='{$showClass}' AND news_website='{$website}' ORDER BY news_addtime DESC ";
}


$result = mysqli_query($link, $sql_new);
$i = 0;

while ($row = mysqli_fetch_assoc($result)) {

    $newsArr[$i]["news_id"] = $row["news_id"];
    $newsArr[$i]["news_title"] = $row["news_title"];
    $newsArr[$i]["news_summary"] = $row["news_summary"];
    $newsArr[$i]["news_img_url"] = $row["news_img_url"];
	//跳转地址 伪静态
    $newsArr[$i]["news_url"] = "news_show.php?news_id=" . $row["news_id"];

    $i++;

}
$news_sum = $i;

?>
	<div class="news w-1240">
			<ul>
<?php

for ($i = ($news_start - 1); (($i < ($news_start + $news_shownum - 1)) & ($i < $news_sum)); $i++) {

    echo <<< EOT
				<li>
					<div class="word">
						<a href="{$newsArr[$i]["news_url"]}" target="_blank">
							<h3>{$newsArr[$i]["news_title"]}</h3>
							<p>{$newsArr[$i]["news_summary"]}</p>
							<span>NEWS</span>
						</a>
					</div>
					<div class="img">
						<a href="{$newsArr[$i]["news_url"]}" target="_blank">
							<img src="{$newsArr[$i]["news_img_url"]}">
						</a>
					</div>
				</li>				
EOT;

}

//分页 向前向后按钮
$page_max = ceil($news_sum / $page_shownum);
?>

				<div class="clearfix"></div>
			</ul>
			<div class="fy">
				<a href="<?php echo "news.php?class=".$showClass."&page=1"; ?>">首页</a>			
<?php

for ($i = 1; $i <= $page_max; $i++) {

	if ($i == $page_jump) {
		echo '<a href="javascript:void(0);" class="active">' . $i . '</a>';
	} else {
		echo <<< EOT
					<a href="news.php?class=$showClass&page=$i">$i</a>		
EOT;
	}
}
?>								
				<a href="<?php echo "news.php?class=".$showClass."&page=" . $page_max; ?>">尾页</a>
			</div>
		</div>