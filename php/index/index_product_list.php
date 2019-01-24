<?php
//产品类别
$sql_product = "SELECT * FROM img WHERE class='index_product_class' AND website='{$website}'LIMIT 2";
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

//产品
$sql_product = "SELECT * FROM product WHERE product_website='{$website}'";
$result = mysqli_query($link, $sql_product);
$j = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $productArr[$j]["product_id"] = $row["product_id"];
    $productArr[$j]["product_name"] = $row["product_name"];
    $productArr[$j]["product_img_url"] = $row["product_img_url"];
    //根据伪静态的定义重写转向url
    $productArr[$j]["product_url"] = "product_show.php?product_id=" . $row["product_id"];

    $j++;
}
?>

		<div class="index_product">
			<div class="main">
				<a href="product.php" class="a_more">MORE</a>
				<ul class="ip_ul">

					<li class="li1">
						<a href="<?php echo $productArr[0]["product_url"]; ?>"><img src="<?php echo $productArr[0]["product_img_url"]; ?>" alt="<?php echo $productArr[0]["product_name"]; ?>"><span><?php echo $productArr[0]["product_name"]; ?></span></a>
					</li>
					<li class="li1">
                        <a href="<?php echo $productArr[1]["product_url"]; ?>"><img src="<?php echo $productArr[1]["product_img_url"]; ?>" alt="<?php echo $productArr[1]["product_name"]; ?>"><span><?php echo $productArr[1]["product_name"]; ?></span></a>
					</li>
					<li class="li0 li_last">
						<a href="<?php echo $productClassArr[0]["class_url"]; ?>" class="a"><img src="<?php echo $productClassArr[0]["class_img_url"]; ?>" alt="<?php echo $productClassArr[0]["class_alt"]; ?>"></a>
						<a href="<?php echo $productClassArr[1]["class_url"]; ?>" class="a"><img src="<?php echo $productClassArr[1]["class_img_url"]; ?>" alt="<?php echo $productClassArr[1]["class_alt"]; ?>"></a>
					</li>
					<li class="li2 ">
                        <a href="<?php echo $productArr[2]["product_url"]; ?>"><img src="<?php echo $productArr[2]["product_img_url"]; ?>" alt="<?php echo $productArr[2]["product_name"]; ?>"><span><?php echo $productArr[2]["product_name"]; ?></span></a>
					</li>
					<li class="li2 ">
                        <a href="<?php echo $productArr[3]["product_url"]; ?>"><img src="<?php echo $productArr[3]["product_img_url"]; ?>" alt="<?php echo $productArr[3]["product_name"]; ?>"><span><?php echo $productArr[3]["product_name"]; ?></span></a>
					</li>
					<li class="li2 ">
                        <a href="<?php echo $productArr[4]["product_url"]; ?>"><img src="<?php echo $productArr[4]["product_img_url"]; ?>" alt="<?php echo $productArr[4]["product_name"]; ?>"><span><?php echo $productArr[4]["product_name"]; ?></span></a>
					</li>
					<li class="li2 li_last">
                        <a href="<?php echo $productArr[5]["product_url"]; ?>"><img src="<?php echo $productArr[5]["product_img_url"]; ?>" alt="<?php echo $productArr[5]["product_name"]; ?>"><span><?php echo $productArr[5]["product_name"]; ?></span></a>
					</li>
				</ul>
			</div>
		</div>