<?php
include_once("../connect.php");
//待加入对输入值的判断 和非中文的鉴定 重复文件的判断

$link_id=$_GET['link_id'];

$sql = "SELECT * FROM link WHERE link_id='{$link_id}'";
$sqlfinish = mysqli_query($link,$sql);

while($row=mysqli_fetch_array($sqlfinish)){
    $link_name=trim($row["link_name"]);
    $link_url=$row["link_url"];
    $link_website=trim($row["link_website"]);
    
}

//echo $news_class;

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
  <link rel="stylesheet" href="//res.layui.com/layui/dist/css/layui.css"  media="all">
      <link rel="stylesheet" href="../../css/font.css">
    <link rel="stylesheet" href="../../css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="../../js/xadmin.js"></script>
        <script type="text/javascript" charset="utf-8" src="../../ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../../ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="../../ueditor/lang/zh-cn/zh-cn.js"></script>
  <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
  

  
  
</head>
<body>
          
          
  

<div class="x-body">
 <form action="link_edit_finish.php" method="post" enctype="multipart/form-data">
                
                <table class="layui-table" >
                    <tbody >
                    <input type="hidden" value="<?php echo $link_id;?>" name="link_id"></input>
                    <tr>
                        <th width="100" colspan="1">友情链接名称</th>
                        <td colspan="1" >
                            <div class="layui-input-inline">
                            	<input type="text" style="width:400px" name="link_name" required="" lay-verify="required" autocomplete="off" class="layui-input" value="<?php echo $link_name;?>">
             				</div>
                        </td>
                            
                        <td colspan="1"  width="50">网站</td>
                        <td colspan="1"  width="100"><?php echo $link_website;?></td>
                     <tr>
                         <th colspan="1">友情链接地址</th>
                         <td colspan="3" width="400"><div class="layui-input-inline"> 
                 						 <input type="text" style="width:400px" name="link_url" required="" lay-verify="required" autocomplete="off" class="layui-input"  value="<?php echo $link_url;?>">
							</div>                
						 </td>
                    </tr>                        
                    </tbody>
                </table>
                 
                <input class="layui-btn" type="submit" name="传值" value="编辑" />
       
</form>

</div>          
          

</body>
</html>