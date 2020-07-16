<?php
include "connection.php";

$post = $_POST;

$connect->hSet($post['no'],'no', $post['no'],'name', $post['name'],'age', $post['age']); 





