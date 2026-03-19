<?php
$category = $_GET["category"];
$prd_name = $_GET["prd_name"];
$data = "$prd_name,$category\n";
$file = fopen("prd.txt","a");
fwrite($file,$data);
header("location:/assingment/product%20page/Product.php");