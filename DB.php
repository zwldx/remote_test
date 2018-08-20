<?php
//开启错误提示
ini_set('display_errors','on');
error_reporting(E_ALL);

$r = mysqli_connect('140.143.64.219','root','root','study');
$sql = "insert into teacher values(1,1,'zhang')";
$result = mysqli_query($r,$sql);
var_dump($result);