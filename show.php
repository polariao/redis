<?php
include "connection.php";

$post = $_POST;

echo $redis->hget($post['no'], 'no');   //学号 
echo $redis->hget($post['no'], 'name');   //姓名
echo $redis->hget($post['no'], 'age');   //年龄
