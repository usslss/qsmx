<?php
if(isset($_GET["class"])){
    $showClass=$_GET["class"];
}else if(!isset($showClass)){
     $showClass="all";   
}

$sql_nav = "SELECT DISTINCT news_class FROM news WHERE news_website='{$website}'";

$result = mysqli_query($link, $sql_nav);
$i = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $newsNavArr[$i]["className"] = $row["news_class"];
    //导航跳转 伪静态 地址
    $newsNavArr[$i]["url"]="news.php?class=".$row["news_class"];

    //导航变色
    if ($row["news_class"] == $showClass) {
        $newsNavArr[$i]["class"] = "active";
    } else {
        $newsNavArr[$i]["class"] = "";
    }

    $i++;

}

$nav_sum = $i;

?>
		<div class="brand-nav w-1240" id="brand">
			<ul>
<?php
for ($i = 0; $i < $nav_sum; $i++) {
    //如果对标题的长度有限制
    echo <<< EOT
				<li class="{$newsNavArr[$i]["class"]}">
					<a href="{$newsNavArr[$i]["url"]}">{$newsNavArr[$i]["className"]}</a>
				</li>    
EOT;
}
?>
			</ul>
		</div>