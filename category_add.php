<?php
$about = $_GET["about"];
$category=$_GET["category"];
$file=fopen("category.txt","a");
$data="$category,$about\n";
fwrite($file,$data);
header("location:/assingment/product%20page/category.php");