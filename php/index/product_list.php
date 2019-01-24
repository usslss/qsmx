<?php
$class_show_num = 3;
$product_show_num = 4;
$sql_class = "SELECT DISTINCT product_class FROM product WHERE product_website='{$website}' LIMIT {$class_show_num}";
$result = mysqli_query($link, $sql_class);
$i = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $classArr[$i]["class_name"] = $row["product_class"];
    $i++;
}

?>

		<div class="index_productlist">
			<div class="main">
<?php

for ($i = 0; $i < $class_show_num; $i++) {
    //如果对标题的长度有限制
    //$product_title_short=mb_substr($productArr[$i]["product_title"],0,22,'utf-8');
    echo <<< EOT
				<dl>
					<dt>{$classArr[$i]["class_name"]}系列</dt>
EOT;

    $sql_product = "SELECT * FROM product WHERE product_class='{$classArr[$i]["class_name"]}' AND product_website='{$website}'";
    $result = mysqli_query($link, $sql_product);
    $j = 0;

    while (($row = mysqli_fetch_assoc($result)) & ($j <= $product_show_num)) {
        $productArr[$j]["product_id"] = $row["product_id"];
        $productArr[$j]["product_name"] = $row["product_name"];
        //根据伪静态的定义重写转向url
        $productArr[$j]["product_url"] = "product_show.php?product_id=" . $row["product_id"];

        $j++;
    }

    for ($k = 0; ($k < $product_show_num) & ($k < $j); $k++) {
        echo <<< EOT
					<dd>
						<a href="{$productArr[$k]["product_url"]}" title="{$productArr[$k]["product_name"]}">{$productArr[$k]["product_name"]}</a>
					</dd>
EOT;
    }
    echo '</dl>';
}
?>
			</div>
		</div>