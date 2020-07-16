<?php
include "connection.php";

$post = $_POST;

$redis->hSet($post['no'],'no', $post['no']); 
$redis->hSet($post['no'],'name', $post['name']); 
$redis->hSet($post['no'],'age', $post['age']);





