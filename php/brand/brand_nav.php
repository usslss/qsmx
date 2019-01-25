<?php
if(isset($_GET["class"])){
    $showBrand=$_GET["class"];
}else if(!isset($showBrand)){
     $showBrand="all";   
}

$sql_nav = "SELECT * FROM brand WHERE brand_website='{$website}' ORDER BY brand_id ASC";

$result = mysqli_query($link, $sql_nav);
$i = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $brandNavArr[$i]["className"] = $row["brand_name"];
    //导航跳转 伪静态 地址
    $brandNavArr[$i]["url"]="brand.php?class=".$row["brand_name"];

    //导航变色
    if($showBrand=='all'){
        $brandNavArr[0]["class"] = "active";
    }

    if ($row["brand_name"] == $showBrand) {
        $brandNavArr[$i]["class"] = "active";
    } else {
        $brandNavArr[$i]["class"] = "";
    }

    $i++;

}

$nav_sum = $i;

?>
		<div class="brand-nav w-1240" id="brand">
			<ul>

<?php
for ($i = 0; $i < 5; $i++) {
    //如果对标题的长度有限制
    echo <<< EOT
				<li class="{$brandNavArr[$i]["class"]}">
					<a href="{$brandNavArr[$i]["url"]}">{$brandNavArr[$i]["className"]}</a>
				</li>    
EOT;
}
?>
			</ul>
		</div>