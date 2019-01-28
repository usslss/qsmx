<?php
include("../connect.php");

//$news_addtime=date("Y-m-d h:i:s");

$brand_id=$_POST["brand_id"];
$brand_name=htmlspecialchars($_POST["brand_name"]);
$brand_url=htmlspecialchars($_POST["brand_url"]);

if(isset($_POST["editorValue1"])){
    $brand_text=$_POST["editorValue1"];
}
else
{
    $brand_text=" ";
}
    $brand_date=$_POST["newDate"];

$sql_brand = "UPDATE brand SET brand_name='{$brand_name}', brand_text='{$brand_text}', brand_url='{$brand_url}', brand_year='{$brand_date}' WHERE brand_id='{$brand_id}'";
$sql_brand_finish = mysqli_query($link,$sql_brand);

echo "修改成功";
mysqli_close($link);
?>