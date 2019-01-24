<?php

$sql_product = "SELECT * FROM img WHERE class='product_class' AND website='{$website}'LIMIT 3";
$result = mysqli_query($link, $sql_product);
$i = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $productClassArr[$i]["class_name"] = $row["name"];
    $productClassArr[$i]["class_en_name"] = $row["en_name"];
    $productClassArr[$i]["class_alt"] = $row["alt"];
    $productClassArr[$i]["class_img_url"] = $row["url"];
    //根据伪静态的定义重写转向url
    $productClassArr[$i]["class_url"] = "product.php?class=" . $row["name"];

    $i++;
}

?>

		<div class="index_producttype">
			<div class="p_title main"><img src="picture/img_title1.png" alt="你的热卤专家"></div>
			<ul class="ip_list main">
<?php

for ($i = 0; $i < 3; $i++) {
    //如果对标题的长度有限制
    //$product_title_short=mb_substr($productClassArr[$i]["product_title"],0,22,'utf-8');
    echo <<< EOT
				<li>
					<img src="{$productClassArr[$i]["class_img_url"]}" alt="{$productClassArr[$i]["class_alt"]}">
					<p class="p1">{$productClassArr[$i]["class_name"]}系列</p>
					<p class="p2">{$productClassArr[$i]["class_en_name"]} SERIES</p>
					<a href="{$productClassArr[$i]["class_url"]}">点击查看</a>
				</li>
EOT;

}
?>
			</ul>
		</div>