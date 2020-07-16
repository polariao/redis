<?php
include "connection.php";

$post = $_POST;

var_dump($post);
$connect->delete($post['no']); 
