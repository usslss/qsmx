<?php
include "../connect.php";
include "../imgcut.php";
$img_source = $website;

$width_pc = 0;
$height_pc = 0;
$width_wap = 0;
$height_wap = 0;
//$width_wap_show = 0;
//$height_wap_show = 0;
$img_cut_pc=1;
$img_cut_wap=1;

if (isset($_POST["name"])) {
    $img_name = $_POST["name"];
} else {
    $img_name = "";
}

if (isset($_POST["en_name"])) {
    $img_en_name = $_POST["en_name"];
} else {
    $img_en_name = "";
}

if (isset($_POST["alt"])) {
    $img_alt = $_POST["alt"];
} else {
    $img_alt = "";
}
$id = $_POST["id"];


$sql = "SELECT * FROM img WHERE id='{$id}'";
$sqlfinish = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($sqlfinish)) {
    $before_img_url = '../../../' . $row["url"];
    $before_wap_img_url = '../../../wap/' . $row["wap_url"];
    $before_img_class = $row["class"];
}

//判定
if ($before_img_class == 'index_slider') {

//pc图片的宽高
    $width_pc = 1920;
    $height_pc = 670;

//wap图片的宽高
    $width_wap = 750;
    $height_wap = 400;

}
$array=explode('_', $before_img_class);
if ($array[1] == 'banner') {

    //pc图片的宽高
        $width_pc = 1920;
        $height_pc = 462;
    
    //wap图片的宽高
        $width_wap = 750;
        $height_wap = 400;
    
}

if ($before_img_class == 'product_class') {

 $img_cut_pc=0;
 $img_cut_wap=0;
    
}


//pc端图片上传
if ($_FILES["file_pc"]["error"]) {
    //  echo $_FILES["file_pc"]["error"];

} else {
    //没有出错
    //加限制条件
    //判断上传文件类型为png或jpg且大小不超过1024000B
    if (($_FILES["file_pc"]["type"] == "image/png" || $_FILES["file_pc"]["type"] == "image/jpeg") && $_FILES["file_pc"]["size"] < 1024000) {
        //防止文件名重复
        $string = $_FILES["file_pc"]["name"];
        $array = explode('.', $string);
        $filename_pc_random = rand(1000, 9999);
        $filename_pc_gbk = date('ymd_His', time()) . "_" . $filename_pc_random . "." . $array[1];
        $file_pc_url = "../../../picture/" . $filename_pc_gbk;
        $img_pc_url = "picture/" . $filename_pc_gbk;
        //转码，把utf-8转成gb2312,返回转换后的字符串， 或者在失败时返回 FALSE。
        $filename_pc = iconv("UTF-8", "gb2312", $file_pc_url);
        //检查文件或目录是否存在
        if (file_exists($filename_pc)) {
            echo "该文件已存在";
        } else {
            //保存文件,   move_uploaded_file 将上传的文件移动到新位置
            move_uploaded_file($_FILES["file_pc"]["tmp_name"], $filename_pc); //将临时地址移动到指定地址
            //删除之前的文件
            unlink($before_img_url);
        }
    } else {
        echo "文件类型不对";
        exit;
    }
    // 裁剪pc图片
    if (isset($file_pc_url)&($img_cut_pc==1)) {

        $source = $file_pc_url;

        // 裁剪后的图片存放目录
        $target = $file_pc_url;

        image_center_crop($source, $width_pc, $height_pc, $target);
    }

}

//移动端的图片的上传
if ($_FILES["file_wap"]["error"]) {
    //  echo $_FILES["file_wap"]["error"];

} else {
    //没有出错
    //加限制条件        到底改不改名字   到底改不改名字   到底改不改名字   到底改不改名字   到底改不改名字   到底改不改名字   到底改不改名字   到底改不改名字   到底改不改名字   到底改不改名字
    //判断上传文件类型为png或jpg且大小不超过1024000B
    if (($_FILES["file_wap"]["type"] == "image/png" || $_FILES["file_wap"]["type"] == "image/jpeg") && $_FILES["file_wap"]["size"] < 1024000) {
        //防止文件名重复
        $string = $_FILES["file_wap"]["name"];
        $array = explode('.', $string);
        $filename_wap_random = rand(1000, 9999);
        if (isset($filename_pc_random)) {
            if ($filename_wap_random == $filename_pc_random) {
                $filename_wap_random = $filename_wap_random + 1;
            }
        }
        $filename_wap_gbk = date('ymd_His', time()) . "_" . $filename_wap_random . "." . $array[1];
        $file_wap_url = "../../../wap/images/" . $filename_wap_gbk;
        $img_wap_url = "images/" . $filename_wap_gbk;

        //$file_wap_show_url = "../../../wap/images/showBanner/" . $filename_wap_gbk;
        //$img_wap_show_url = "images/showBanner/" . $filename_wap_gbk;
        //转码，把utf-8转成gb2312,返回转换后的字符串， 或者在失败时返回 FALSE。
        $filename_wap = iconv("UTF-8", "gb2312", $file_wap_url);
        //检查文件或目录是否存在
        if (file_exists($filename_wap)) {
            echo "该文件已存在";

        } else {
            //保存文件,   move_uploaded_file 将上传的文件移动到新位置
            move_uploaded_file($_FILES["file_wap"]["tmp_name"], $filename_wap); //将临时地址移动到指定地址
            //删除之前的文件
            unlink($before_wap_img_url);

        }
    } else {
        echo "文件类型不对";
        exit;
    }
    // 裁剪wap图片
    if (isset($file_wap_url)&($img_cut_wap==1)) {

        $source = $file_wap_url;

        // 裁剪后的图片存放目录
        $target = $file_wap_url;
        image_center_crop($source, $width_wap, $height_wap, $target);

        //wap产品展示页用图片
        // 裁剪后的图片存放目录
        //$target2 = $file_wap_show_url;
        //image_center_crop($source, $width_wap_show, $height_wap_show, $target2);
    }
}

if (isset($file_pc_url)) {
    $sql_img = "UPDATE img SET url='{$img_pc_url}' WHERE id='{$id}'";
    $sql_img_finish = mysqli_query($link, $sql_img);
}

if (isset($file_wap_url)) {
    $sql_img = "UPDATE img SET wap_url='{$img_wap_url}'  WHERE id='{$id}'";
    $sql_img_finish = mysqli_query($link, $sql_img);
}

$sql_text = "UPDATE img SET name='{$img_name}', en_name='{$img_en_name}', alt='{$img_alt}' WHERE id='{$id}'";
$sql_text_finish = mysqli_query($link, $sql_text);

echo "修改图片成功";

mysqli_close($link);
