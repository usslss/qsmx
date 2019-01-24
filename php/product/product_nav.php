<?php
if(isset($_GET["class"])){
    $showProductClass=$_GET["class"];
    $allProductClass='';
    if($showProductClass==''){
        $allProductClass='active';
    }
}else{
    $showProductClass='';
    $allProductClass='active';
}

$sql_product_nav = "SELECT DISTINCT product_class FROM product WHERE product_website='{$website}'";

$result = mysqli_query($link, $sql_product_nav);
$i = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $productNavArr[$i]["className"] = $row["product_class"];
    $productNavArr[$i]["url"]=$page.".php?class=".$row["product_class"];
    if ($row["product_class"] == $showProductClass) {
        $productNavArr[$i]["class"] = "active";
    } else {
        $productNavArr[$i]["class"] = "";
    }
    $i++;

}

//$productNavArr[0]["class"] = "";
$nav_sum = $i;

?>
			<div class="com_tab">
				<a href="product.php" class="<?php echo $allProductClass;?>">全部</a>

<?php
for ($i = 0; $i < $nav_sum; $i++) {
    //如果对标题的长度有限制
    echo <<< EOT
                    <a class="{$productNavArr[$i]["class"]}" href="{$productNavArr[$i]["url"]}">{$productNavArr[$i]["className"]}</a>
EOT;
}
?>
            </div>