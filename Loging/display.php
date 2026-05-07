<?php 
session_start();
include "db.php";
//set session
$sql = "select * from products";
$result = mysqli_query($conn,$sql);
    if(!$result){
        echo "Error: " . mysqli_connect_error();
    }
    else{
       
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
            h2{
            background-color: rgba(172, 93, 19, 1);
            height: 50px;
            padding: 30px 0 20px 30px ;
            font-size: 32px;
            color: white;
        }
        .body{
            display: flex;
            flex-flow: row nowrap;
            gap: 30px;

        }
           .body ul{
            background-color: rgba(172, 93, 19, 1);
            height: 100vh;
            width: 150px;
            text-align: left;
            padding: 30px 0 0 30px;
        }
        ul li{
            list-style: none;
            margin-bottom: 30px;
        }
        ul li a{
            display: block;
            text-decoration: none;
            color: white;
            font-weight: 800;
            font-size: 15px;
            transition: all 0.3s ease;
        }
        ul li a:hover{
            color: blue;
            transform: translateX(10px);
        }
        .body p{
            margin-top: 30px;
        }
        .product-section{
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
            gap: 20px;
            align-items: center;
        }
    .product{
   width: 300px;
   margin: 20px 0;
   border-radius: 10px;
   background-color: white;
   border: none;
   transition: all 0.3s ease;
   box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }
    .product:hover{
        transform: translateY(-15px);
        cursor: pointer;
        border-radius: 10px;
    }
.image-container{
    width: 100%;
    height: 220px;
    overflow: hidden;
}
.image-container img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    object-position: center;
    border-bottom: 1px solid grey;
    border-radius: 10px 10px 0 0;
    transition: transform 0.4s ease;
}
.image-container:hover img{
    transform: scale(1.1);
    border-radius: 10px 10px 0 0;
}
.product h4{
    font-size: 25px;
    text-align: center;
    margin-top: 10px;
}
.product p{
    text-align: center;
    font-size: 18px;
    margin-top: 10px;
}
/* Action Buttons */
    .product .update,
    .product .delete {
        display: block;
        padding: 4px 8px;
        margin: 5px;
        text-decoration: none;
        border-radius: 6px;
        font-weight: 500;
        transition: 0.3s;
    }

    .product .update {
        background: #27ae60;
        color: white;
    }

    .product .delete {
        background: #e74c3c;
        color: white;
    }

    .product .update:hover { background: #219653; }
    .product .delete:hover { background: #c0392b; }
        
    </style>
</head>
<body>
    <div class="header">
        <h2>Welcome to Admin Dashboard</h2>
    </div>
    <div class="body">
    <ul>
            <li><a href="add.php">Add Products</a></li>
            <li><a href="display.php">View Products</a></li>
            <li><a href="#">View Users</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    <div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum tempora obcaecati eveniet illum, porro iusto quisquam soluta assumenda omnis animi.</p>
        <div class="product-section">
     <?php  while($row = mysqli_fetch_assoc($result)){ ?>
            <div class="product"> 
                <div class="image-container">
                    <img src="../Images4Kids/<?php echo $row['image'] ?>" alt="shirt">
                </div>
                <h4><?php echo $row['name'] ?></h4>
                <p> $<?php echo $row['price'] ?></p>
                <p><a href="update.php?updateID=<?php echo $row['productID'];?>" class="update">Update</a></p>
                <p><a href="delete.php?deleteID=<?php echo $row['productID'];?>" class="delete">Delete</a></p>
            </div>
        <?php  } ?>
        </div>
    </div>
    </div>
</body>
</html>
   
