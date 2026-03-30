<?php
$id = $_GET["id"];
$work = isset($_GET["work"]) ? $_GET["work"] : "update";
$category = "";
$about = "";

$data = file("category.txt");
if (isset($data[$id])) {
    $ind = explode(",", trim($data[$id]));
    $category = isset($ind[0]) ? $ind[0] : "";
    $about = isset($ind[1]) ? $ind[1] : "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <div class="sidebar">
        <div class="tabs">
            <a href="home.php"><h1>HOME</h1></a>
            <a href="Product.php"><h1>PRODUCT</h1></a>
            <a href="category.php"><h1>CATEGORY</h1></a>
            <a href="about.php"><h1>ABOUT</h1></a>
        </div>
    </div>

    <div class="list">
        <center><h1 class="page-title">UPDATE CATEGORY</h1></center>
        <div class="form">
            <form action="category_add.php">
                <label for="category">Category:-</label>
                <input type="text" name="category" id="category" placeholder="Enter the category" value="<?php echo $category; ?>">
                <label for="about">About:-</label>
                <input type="text" name="about" id="about" placeholder="Enter something about category" value="<?php echo $about; ?>">
                <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                <input type="hidden" name="work" value="update">
                <input type="submit" value="<?php 
                if($work=="update"){
                    echo "Update";}else{
                        echo "delete";
                    }
                    ?>"
                    id="add">
            </form>
        </div>
        <p class="page-note"><a href="category.php">Back to category list</a></p>
    </div>
</body>
</html>
