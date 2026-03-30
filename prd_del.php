<?php
$id = $_GET["id"];
$work = $_GET["work"];
$prd_name = "";
$selected_category = "";

$rows = file("prd.txt");
if (isset($rows[$id])) {
    $item = explode(",", trim($rows[$id]));
    $prd_name = isset($item[0]) ? $item[0] : "";
    $selected_category = isset($item[1]) ? $item[1] : "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css?v=3">
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
    <center><h1 class="page-title"><?php echo $work ?> PRODUCT</h1></center>
    <form action="prd_add.php" class="form">
        <label for="prd_name" class="prd_cls">PRODUCT NAME:-</label> <input type="text" name="prd_name" id="prd_name" placeholder="Enter your name" value="<?php echo $prd_name; ?>">
            <label for="category" class="prd_cls">CATEGORY:-</label>
            <input type="hidden" name="work" id="work" value="<?php echo $work?>">
            <input type="hidden" name="id" id="work" value="<?php echo $id?>">
            <select name="category" id="select">
            <option value="Select">select</option>
            <?php
                $data = file("category.txt");
                for($i=0;$i<count($data)-(count($data)*0.5);$i++){
                    if ($i%2==0){
                    foreach($data as $line){
                        $ind=explode(",",$line);

            ?>

                <option value="<?php echo $ind[$i]; ?> " <?php if (trim($ind[$i]) == trim($selected_category)) { echo "selected"; } ?>>
                <?php
                    echo $ind[$i];
                ?>  
                </option>
            <?php
                     } } }
            ?>
            </select>
            <input type="submit" id="add" value="<?php echo $work?>">
    </form>
    <p class="page-note"><a href="Product.php">Back to product list</a></p>
    </div>
</body>
</html>