<?php

include "config.php";

$name=$_GET["name"];
$nr=$_GET["nr"];

if($name==""||$nr=="")
{
  echo "请输入完整内容！";
  return;
}

$sql = "INSERT INTO Mylaoyu (name, namefsnr)
VALUES ('".$name."', '".$nr."')";
 
if (mysqli_query($conn, $sql)) {
    echo "发送成功";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
mysqli_close($conn);
?>