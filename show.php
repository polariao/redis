<?php
include "connection.php";

$post = $_POST;

echo $connect->hget($post['no'], 'no');   //学号 
echo $connect->hget($post['no'], 'name');   //姓名
echo $connect->hget($post['no'], 'age');   //年龄