<?php
$work = $_GET["work"];
if ($work == "delet"){
    header("location:/assingment/product%20page/category.php");
}
elseif($work == "add"){
$about = $_GET["about"];
$category=$_GET["category"];
$file=fopen("category.txt","a");
$data="$category,$about\n";
fwrite($file,$data);
header("location:/assingment/product%20page/category.php");
}
elseif($work == "update"){
    $id = $_GET['id'];
    $category = $_GET['category'];
    $about = $_GET['about'];

    $pdata = "$category,$about\n";
    $non_updated = file("category.txt");
    $non_updated[$id] = $pdata;
    $file = fopen("category.txt","w");
    fclose($file);
    $file = fopen("category.txt","a");
    foreach($non_updated as $line){
        fwrite($file,$line);
    }
    header("location:/assingment/product%20page/category.php");

}else{
    $id = $_GET['id'];
    $data = file("category.txt");
    unset($data[$id]);
    unlink("category.txt");
    $file = fopen("category.txt","a");
    foreach($data as $line){
        fwrite($file,$line);
    }
    header("location:/assingment/product%20page/category.php");
};