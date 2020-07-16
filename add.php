<?php
include "connection.php";

$post = $_POST;

$connect->hSet($post['no'],'no', $post['no']); 
$connect->hSet($post['no'],'name', $post['name']); 
$connect->hSet($post['no'],'age', $post['age']);





