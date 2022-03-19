<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "glz";
 
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
//servername是链接地址,username是数据库帐号,password是数据库密码,dbname数据库名
// 检测连接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}

?>