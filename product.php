<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <div class="sidebar">
        <div class="tabs">
            <a href="home.php">
                <h1>HOME</h1>
            </a><a href="Product.php">
                <h1>PRODUCT</h1>
            </a><a href="category.php">
                <h1>CATEGORY</h1>
            </a><a href="about.php">
                <h1>ABOUT</h1>
            </a>
        </div>
        
    </div>
    <div class="main">
        <form action="prd_add.php" class="form">
            <label for="prd_name" class="prd_cls">PRODUCT NAME:-</label> <input type="text" name="prd_name" id="prd_name" placeholder="Enter your name">
            <label for="category" class="prd_cls">CATEGORY:-</label>
            <input type="hidden" name="work" id="work" value="add">
            <select name="category" id="select">
            <option value="Select">select</option>
            <?php
                $data = file("category.txt");
                for($i=0;$i<count($data)-(count($data)*0.5);$i++){
                    if ($i%2==0){
                    foreach($data as $line){
                        $ind=explode(",",$line);

            ?>

                <option value="<?php echo $ind[$i]; ?> ">
                <?php
                    echo $ind[$i];
                ?>  
                </option>
            <?php
                     } } }
            ?>
            </select>
            <input type="submit" id="add">
        </form>
        <center><table border="2">
                <tr>
                    <th>PRODUCT</th>
                    <th>CATEGORY</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                </tr>
                <?php
                $id = 0;
                $data = file("prd.txt");
                foreach($data as $line){
                    $ind = explode(",",$line);
                ?>
                <tr>
                <?php
                    for($i=0;$i<count($ind);$i++){
                ?>
                
                    <td><?php echo $ind[$i]?></td>
                
                <?php
                    }
                ?>
                    <td><a href="prd_del.php?id=<?php echo $id?>& work=UPDATE"><button>UPDATE</button></a></td>
                    <td><a href="prd_add.php?id=<?php echo $id?>& work=DELETE"><button>DALETE</button></a></td>
                </tr>
                    
                
                <?php
                $id++;
                }
                ?>
            </table>
            </center>
    </div>
    
</body>
</html>