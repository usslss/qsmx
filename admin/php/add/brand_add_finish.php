<?php
include "../connect.php";

//$news_addtime=date("Y-m-d h:i:s");

$brand_name = htmlspecialchars($_POST["brand_name"]);
$brand_url = htmlspecialchars($_POST["brand_url"]);
$brand_date=$_POST["newDate"];

if (isset($_POST["editorValue1"])) {
    $brand_text = $_POST["editorValue1"];
} else {
    $brand_text = " ";
}

$sql_product = "INSERT INTO brand (brand_name, brand_text,brand_url,brand_year,brand_website) VALUES ( '{$brand_name}', '{$brand_text}', '{$brand_url}', '{$brand_date}', '{$website}')";

$sqlfinish = mysqli_query($link, $sql_product);
echo "添加品牌成功,稍后提交logo";

mysqli_close($link);