<?php
include_once "../connect.php";

$brand_id = $_GET["brand_id"];

$sql = "SELECT * FROM brand WHERE brand_id='{$brand_id}'";
$sqlfinish = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($sqlfinish)) {
    $brand_name = $row["brand_name"];
    $brand_text = $row["brand_text"];
    $brand_url = $row["brand_url"];
    $brand_year = substr($row["brand_year"],0,10);
}

mysqli_close($link);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>layui</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="//res.layui.com/layui/dist/css/layui.css" media="all">
    <link rel="stylesheet" href="../../css/font.css">
    <link rel="stylesheet" href="../../css/xadmin.css">
    <style>
    /* 解决下拉菜单被ueditor遮挡的问题     */
    .layui-form-select dl {
        z-index: 9999;
    }
    </style>
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="../../js/xadmin.js"></script>
    <script type="text/javascript" charset="utf-8" src="../../ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../../ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="../../ueditor/lang/zh-cn/zh-cn.js"></script>
    <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->

    <script type="text/javascript">
    $(document).ready(function() {

        var editorOption = {
            //这里可以选择自己需要的工具按钮名称,此处仅选择如下五个
            toolbars: [
                ['fullscreen', 'source', 'undo', 'redo', '|', 'fontfamily', 'fontsize', 'forecolor',
                    'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'removeformat',
                    'formatmatch', 'autotypeset', 'pasteplain'
                ],

            ],
            //focus时自动清空初始化时的内容
            autoClearinitialContent: false,
            //关闭elementPath
            elementPathEnabled: false,
            //传值的名称
            textarea: 'editorValue1',
            //让编辑器换行以br结束 而不是p
            enterTag: 'br'
        };

        var strrr = document.getElementById('ueText').value;

        var editor_a = new baidu.editor.ui.Editor(editorOption);
        editor_a.render('editor');
        editor_a.ready(function() {
            editor_a.setContent(strrr); //赋值给UEditor
        });



    });

    //日期
    layui.use('laydate', function() {
        var laydate = layui.laydate;

        //执行一个laydate实例
        laydate.render({
            elem: '#brandDate' //指定元素
            ,value: '<?php echo $brand_year;?>'
            ,done: function(value, date, endDate){
            document.getElementById('newDate').value = value;
            

            }       

        });
    });
    </script>


</head>

<body>




    <div class="x-body">
        <form action="brand_edit_finish.php" method="post" enctype="multipart/form-data">

            <table class="layui-table">
                <tbody>
                    <input type="hidden" value="<?php echo $brand_id; ?>" name="brand_id"></input>
                    <input type="hidden" id="newDate" value="<?php echo $brand_year; ?>" name="newDate"></input>
                    <textarea id="ueText" style="display:none;"><?php echo $brand_text; ?></textarea>
                    <tr>
                        <th width="120" colspan="1">品牌名称</th>
                        <td colspan="1">
                            <div class="layui-input-inline">
                                <input type="text" style="width:300px" name="brand_name" required=""
                                    lay-verify="required" autocomplete="off" class="layui-input"
                                    value="<?php echo $brand_name; ?>">
                            </div>
                        <td colspan="1">创建时间</td>
                        <td colspan="1">
                            <input type="text" class="layui-input" id="brandDate">
                        </td>
                    <tr>
                    <tr>
                        <th width="120" colspan="1">品牌官网</th>
                        <td colspan="3">
                            <div class="layui-input-inline">
                                <input type="text" style="width:300px" name="brand_url" required=""
                                    lay-verify="required" autocomplete="off" class="layui-input"
                                    value="<?php echo $brand_url; ?>">
                            </div>
                        </td>
                    <tr>
                        <th width="120" colspan="1" valign="top">产品简介</th>
                        <td colspan="3">
                            <script id="editor" type="text/plain" style="width:600px;height:150px;"></script>

                        </td>
                    </tr>

                </tbody>
            </table>

            <input class="layui-btn" type="submit" name="传值" value="编辑" />

        </form>
    </div>





</body>

</html>