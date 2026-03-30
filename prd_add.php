<?php
$work =$_GET['work'];
if ($work == "add"){
$category = $_GET["category"];
$prd_name = $_GET["prd_name"];
$data = "$prd_name,$category\n";
$file = fopen("prd.txt","a");
fwrite($file,$data);
header("location:/assingment/product%20page/Product.php");
}
elseif($work == "UPDATE"){
    $id = $_GET['id'];
    $category = $_GET['category'];
    $prd_name = $_GET["prd_name"];

    $pdata = "$prd_name,$category\n";
    $non_updated = file("prd.txt");
    $non_updated[$id] = $pdata;
    $file = fopen("prd.txt","w");
    fclose($file);
    $file = fopen("prd.txt","a");
    foreach($non_updated as $line){
        fwrite($file,$line);
        
    }
    header("location:/assingment/product%20page/product.php");
    echo $work;

}else{
    $id = $_GET['id'];
    $data = file("prd.txt");
    unset($data[$id]);
    unlink("prd.txt");
    $file = fopen("prd.txt","a");
    foreach($data as $line){
        fwrite($file,$line);
    }
    header("location:/assingment/product%20page/product.php");
}