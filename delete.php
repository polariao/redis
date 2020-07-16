<?php
include "connection.php";

$post = $_POST;

//var_dump($post);
$redis->del($post['no']); 
