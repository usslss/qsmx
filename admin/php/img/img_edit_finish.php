<?php
include "../connect.php";
include "../imgcut.php";
$img_source = $website;


if ($_FILES["file_pc"]["error"] == 1 or $_FILES["file_pc"]["size"] >= 2048000) {
        echo "文件过大,请不要上传大于2mb的图片!";
        exit;
    }

    
$img_cut_pc = 0;
$img_cut_wap = 0;

$width_pc = 0;
$height_pc = 0;
$width_wap = 0;
$height_wap = 0;

if (isset($_POST["name"])) {
    $img_name = $_POST["name"];
} else {
    $img_name = "";
}

$id = $_POST["id"];

$sql = "SELECT * FROM img WHERE id='{$id}'";
$sqlfinish = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($sqlfinish)) {
    $before_img_url = '../../../' . $row["url"];
    $before_wap_img_url = '../../../wap/' . $row["wap_url"];
    $before_img_class = $row["class"];
    //移动端上线时 这里 和下面剪切wap图片功能注意恢复
    //移动端上线时 这里 和下面剪切wap图片功能注意恢复
    //移动端上线时 这里 和下面剪切wap图片功能注意恢复
    //移动端上线时 这里 和下面剪切wap图片功能注意恢复
    //移动端上线时 这里 和下面剪切wap图片功能注意恢复
    //移动端上线时 这里 和下面剪切wap图片功能注意恢复
    //移动端上线时 这里 和下面剪切wap图片功能注意恢复
    //移动端上线时 这里 和下面剪切wap图片功能注意恢复
    //移动端上线时 这里 和下面剪切wap图片功能注意恢复
    //移动端上线时 这里 和下面剪切wap图片功能注意恢复
  //  $urlForWap = $row["wap_url"];
}

//判定是否为产品轮播图
$sql_brand = "SELECT * FROM brand";
$sqlfinish = mysqli_query($link, $sql_brand);

while ($row = mysqli_fetch_array($sqlfinish)) {
    if($before_img_class==$row["brand_name"]){
        $before_img_class='brand_slider';
    }
}
//判定是否为一种banner图
$isBanner = explode("_", $before_img_class);
if($isBanner[1]=='banner'){
    $before_img_class='all_banner';
}

//判定
if ($before_img_class == 'index_slider') {

    $img_cut_pc = 1;
    $img_cut_wap = 1;
//pc图片的宽高
    $width_pc = 1920;
    $height_pc = 1080;

//wap图片的宽高
    $width_wap = 6666;
    $height_wap = 6666;

}
if ($before_img_class == 'brand_slider') {

    $img_cut_pc = 1;
    $img_cut_wap = 1;
//pc图片的宽高
    $width_pc = 800;
    $height_pc = 500;

//wap图片的宽高
    $width_wap = 6666;
    $height_wap = 6666;

}

if ($before_img_class == 'all_banner') {

    $img_cut_pc = 1;
    $img_cut_wap = 1;
//pc图片的宽高
    $width_pc = 1920;
    $height_pc = 300;

//wap图片的宽高
    $width_wap = 6666;
    $height_wap = 6666;

}

//获取上传文件的文件类型
$arr1 = explode("/", $before_img_url);
$fileNameAll = $arr1[count($arr1) - 1];
$arr2 = explode(".", $fileNameAll);

$file_type_before = "image/" . $arr2[1];
if ($file_type_before == "image/jpg") {
    $file_type_before = "image/jpeg";
}

//生成复制文件的地址
$arr3 = explode(".", $urlForWap);
$copy_img_url = '../../../' . $arr3[0] . '_copy.' . $arr3[1];

//pc端图片上传
if ($_FILES["file_pc"]["error"]) {
    if ($_FILES["file_pc"]["error"] == 1 or $_FILES["file_pc"]["size"] >= 2048000) {
        echo "文件过大,请不要上传大于2mb的图片!";
        exit;
    }
} else {
    //首先判断上传的和之前的文件类型相同
    if ($_FILES["file_pc"]["type"] != $file_type_before) {
        echo "请上传同类型图片";
        exit;
    }

    if (($_FILES["file_pc"]["type"] == "image/png" || $_FILES["file_pc"]["type"] == "image/jpeg") && $_FILES["file_pc"]["size"] < 2048000) {
        //不进行重命名 而是改名后原地址覆盖
        $file_pc_url = $before_img_url;
        $file_wap_url = $before_wap_img_url;
        //转码，把utf-8转成gb2312,返回转换后的字符串，或者在失败时返回 FALSE。
        $filename_pc = iconv("UTF-8", "gb2312", $file_pc_url);

        //上传文件
        move_uploaded_file($_FILES["file_pc"]["tmp_name"], $filename_pc); //将临时地址移动到指定地址

        //复制一份用于生成对应的wap版本
        copy($filename_pc, $copy_img_url);
    } else {
        echo "文件类型不对";
        exit;
    }
    // 裁剪pc图片
    if ($img_cut_pc == 1) {
        $source = $file_pc_url;
        $target = $file_pc_url;
        image_center_crop($source, $width_pc, $height_pc, $target);
    }
    /* 裁剪wap对应图片
    if ($img_cut_wap == 1) {
        $source = $copy_img_url;
        $target = $file_wap_url;
        image_center_crop($source, $width_wap, $height_wap, $target);
    }*/
    //清除之前用于wap复制的拷贝版本
    unlink($copy_img_url);
}

$sql_text = "UPDATE img SET name='{$img_name}' WHERE id='{$id}'";
$sql_text_finish = mysqli_query($link, $sql_text);

echo "修改图片成功";

mysqli_close($link);