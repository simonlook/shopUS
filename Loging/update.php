<?php

include "db.php";
//set session
$update = $_GET['updateID'];
$successMessage = "";

$sql1 = "SELECT image,name,price from products where productID = '$update'";
$result1 = mysqli_query($conn,$sql1);
$row = mysqli_fetch_assoc($result1);

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $temp_location = $_FILES['image']['tmp_name'];
    $upload_location = "../Images4Kids/";

    $sql = "UPDATE products SET image = '$image', name = '$name' , price = '$price'
    where productID  = '$update' ";

    $result = mysqli_query($conn,$sql);

    if(!$result){
    die(mysqli_error($conn));
}
else{
        $successMessage = "Product updated successfully!";
        move_uploaded_file($temp_location,$upload_location.$image);
    }
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
           .header h2{
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
            text-decoration: none;
            color: white;
            font-weight: 800;
            font-size: 15px;
        }
        ul li a:hover{
            color: blue;
        }
        .body p{
            margin-top: 30px;
        }
/* FORM CONTAINER */
form{
    width: 400px;
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin: 10px auto;
}
/* IMAGE PREVIEW */
    img{
    width: 180px;
    object-fit: cover;
    margin: auto;
    border-radius: 10px;
    border: 2px solid #ddd;
}

/* INPUTS */
form input[type="text"],
form input[type="number"],
form input[type="file"]{
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    outline: none;
    font-size: 15px;
}

/* INPUT FOCUS */
form input:focus{
    border-color: gray;
}

/* BUTTON */
form input[type="submit"]{
    padding: 10px;
    border: none;
    border-radius: 8px;
    background: gray;
    color: black;
    font-size: 20px;
    cursor: pointer;
    transition: 0.3s;
}

/* BUTTON HOVER */
form input[type="submit"]:hover{
    background: black;
    color: white;
}
/* SUCCESS MESSAGE */
.success{
    background: #e8f7e8;
    color: green;
    padding: 10px;
    border-radius: 8px;
    text-align: center;
    font-size: 14px;
}
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
        <form action="" method="POST" enctype="multipart/form-data">
        <h2>Upload Image Here!</h2>
        <input type="file" name="image" id="" required>
        <img src="../Images4Kids/<?php echo $row['image'] ?>" alt="" width="200">
        <input type="text" name="name" placeholder="Enter your name" value="<?php echo $row['name']  ?>">
        <input type="number" name="price" placeholder="Enter price here!" value="<?php echo $row['price']  ?>">
        <input type="submit" value="update" name="update">
        <div class="success">
            <?php echo $successMessage ?>
        </div>
    </form>
    </div>
    </div>
    
</body>
</html>
    