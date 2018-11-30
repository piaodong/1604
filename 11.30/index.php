<?php
//数据库配置信息
$db_host = "127.0.0.1";
$db_user = "root";
$db_pwd = "root";
$db_name = "a";

//连接MysSQL数据库
$link = @mysql_connect($db_host, $db_user, $db_pwd);
if(!$link)
{
    exit("数据库连接失败！");
}else{
    //echo "数据库连接成功";
}

//选择当前数据库
if(!mysql_select_db($db_name, $link))
{
    exit("选择数据库".$db_name."失败");
}else{
    //echo "数据库".$db_name."连接成功";
}

//设置返回数据的字符集
mysql_query("set names utf8");

//查询数据
$sql = "SELECT * FROM aa";
$result = mysql_query($sql);
//echo $result;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>列表</title>
</head>
<body>


<!-- <table width="800px" border="1" style="border-collapse: collapse;"> -->
<table border="1">
    <thead>
    <th>id</th>
    <th>名</th>
    <th>密码</th>
    <th>名称</th>
    <th>年龄</th>
    </thead>
    <?php

    while($row = mysql_fetch_row($result))
    {
//				print_r($row);  //打印输出，测试使用
//				exit();  //终止程序
        ?>
        <tr>
            <td align="center"><?php echo $row[0]; ?></td>
            <td align="center"><?php echo $row[1]; ?></td>
            <td align="center"><?php echo $row[2]; ?></td>
            <td align="center"><?php echo $row[3]; ?></td>
            <td align="center"><?php echo $row[4]; ?></td>
            <td align="center"><a href="" id="asd">删除 </a> </td>
        </tr>
        <?php
    }
    ?>
</table>


</body>
</html>

<script src="./jquery.js"></script>
<script src="./layer/layer.js"></script>

<script>

    $("#asd").click(function(){
        layer.confirm('是否删除', {
            btn: ['是的','不要'] //按钮
        }, function(){
            layer.msg('删除成功', {icon: 1});
            $("#asd").hide();
        }, function(){
            layer.msg('你居然不删除', {
                time: 20000, //20s后自动关闭
                btn: ['我靠', '拜拜']
            });
        });
    })

</script>
