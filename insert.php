<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php

// TODO 存入数据库
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','pwd');//密码
define('DB_NAME','informationone');//在phpmyadmin创建一个名为trigkit的数据库

//连接数据库
$connect = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
if (!$connect) {
  die('数据库连接失败，错误信息：'.mysqli_connect_error());# code...
}
//选择指定数据库

$sql = "insert into user values(null, '6', '唐', '描述',
'lkjhcf5555', 'tdd', ' ', '是', '20160726', '23', '20160726', '唐', '20160726');
";
$connect->query("SET NAMES utf8");
$result = $connect->query($sql);
if( !$result ){
  echo $connect->error;
  echo $sql;
}else{
  echo "Success.";
}

?>
</body>
</html>
