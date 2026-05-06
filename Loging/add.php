<?php 
session_start();
include "db.php";
//set session
if(isset($_POST['add'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $temp_location = $_FILES['image']['tmp_name'];
    $upload_location = "../Images4Kids/";

    $sql = "insert into products(image,name,price) values('$image','$name','$price')";

    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "Error: ";
    }
    else{
        echo "Product added successfully!";
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
</head>
<body>
    <div>
        <h2>Welcome to Admin Dashboard</h2>
        <ul>
            <li><a href="add.php">Add Products</a></li>
            <li><a href="display.php">View Products</a></li>
            <li><a href="">View Users</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <form action="add.php" method="POST" enctype="multipart/form-data">
        <h2>Upload Image Here!</h2>
        <input type="file" name="image" id="" required>
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="number" name="price" placeholder="Enter price here!" required>
        <input type="submit" value="Add" name="add">
    </form>
    </div>
</body>
</html>