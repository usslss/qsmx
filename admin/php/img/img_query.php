<?php

include_once "../connect.php";

$page = "1";
$list_show = "10";
$result = "";
$i = "1";

if (isset($_GET["page"])) {
    $page = $_GET["page"];
}

if (isset($_GET["limit"])) {
    $list_show = $_GET["limit"];
}

$query_page = $_GET["img_page"];
$query_class = $_GET["img_class"];
$query_info = $query_page . "_" . $query_class;

$sqlmsg = "SELECT * FROM img WHERE class='{$query_info}' AND website='{$website}'";
if ($query_class == "banner") {
    $sqlmsg = "SELECT * FROM img WHERE class LIKE '%_banner' AND website='{$website}'";
}
//数量
$sqlsum = "SELECT count(*) FROM img WHERE class='{$query_page}_{$query_class}' AND website='{$website}'";

if (isset($_GET["news_class"])) {
    $query_newsclass = $_GET["news_class"];
    if ($_GET["news_class"] == "品牌名称") {
        $query_newsclass = '%';
    }
} else {
    $query_newsclass = '%';
}

if ($query_info == "all_brand") { //产品轮播页传来的请求
    //查询
    $sqlmsg = "SELECT * FROM img WHERE class LIKE '{$query_newsclass}' AND website='{$website}'";

    //数量
    $sqlsum = "SELECT count(*) FROM img WHERE class LIKE '{$query_newsclass}' AND website='{$website}'";
    //展示所有产品时 排除其他干扰
    if ($query_newsclass == '%') {

        //生成所有产品查询字符串
        $sql_allout = "SELECT brand_name FROM brand ";
        $sqlFinishOut = mysqli_query($link, $sql_allout);
        $out="";
        while ($row = mysqli_fetch_array($sqlFinishOut)) {
            $out=$out."class = '".$row["brand_name"]."' OR ";
            
        }
        $out = rtrim($out, " OR ");

        $sqlmsg = "SELECT * FROM img WHERE ".$out." AND website='{$website}'";
        
        $sqlsum = "SELECT count(*) FROM img WHERE ".$out." AND website='{$website}'";
    }
}

$a = mysqli_query($link, $sqlsum);
$xx = mysqli_fetch_row($a);
$sum = $xx[0];

$list_head = $list_show * ($page - 1);
$list_bottom = $list_show * $page;

$msglink = $link->query($sqlmsg);

if ($msglink->num_rows > 0) {
    // 输出数据
    while (($row = $msglink->fetch_assoc()) != false) {
        if (($i > $list_head) & ($i <= $list_bottom)) {
            $result = "{$result}" . "{\"id\":\"" . $row["id"] . "\",\"name\":\"" . $row["name"] . "\"," .
                "\"wap_url\":\"" . $row["wap_url"] . "\"," .
                "\"alt\":\"" . $row["alt"] . "\"," .
                "\"class\":\"" . $row["class"] . "\"," .
                "\"url\":\"" . $row["url"] . "\"},";
        }
        $i = $i + 1;
    }
} else {
    //空搜索处理空搜索处理空搜索处理空搜索处理空搜索处理空搜索处理空搜索处理空搜索处理空搜索处理空搜索处理空搜索处理空搜索处理空搜索处理
    echo "0 结果";
}
//关闭数据库链接
mysqli_close($link);
//去掉字符串最后一个逗号
$result = rtrim($result, ",");

echo '{"code":0,"msg":"","count":' . $sum . ',"data":[' . $result . ']}';
