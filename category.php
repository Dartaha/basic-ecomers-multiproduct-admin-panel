<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>
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
    <div class="list">
        <center><h1>ADD CATEGORY</h1></center>
        <div class="form">
            <form action="category_add.php">
                <label for="catagory">Category:-  </label> <input type="text" name="category" placeholder=" Enter the category">
                <label for="about">About:-  </label> <input type="text" name="about" placeholder="Enter some thing about category">
                <input type="submit" value="Add" id="add">
            </form>
        </div>
        <div class="table">
            <center><table border="2">
                <tr>
                    <th>CATEGORY</th>
                    <th>ABOUT</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                </tr>
                <?php
                $id = 0;
                $data = file("category.txt");
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
                    <td><a href="cat_upd.php?id=<?php echo $id?>"><button>UPDATE</button></a></td>
                    <td><a href="cat_del?id=<?php echo $id?>"><button>DALETE</button></a></td>
                </tr>
                    
                
                <?php
                $id++;
                }
                ?>
            </table></center>
        </div>
        
    </div>
</body>
</html>