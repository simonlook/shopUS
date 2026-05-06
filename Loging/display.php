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
</head>
<body>
    <div>
        <h2>Welcome to Admin Dashboard</h2>
        <ul>
            <li><a href="add.php">Add Products</a></li>
            <li><a href="">View Products</a></li>
            <li><a href="">View Users</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <table>
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><img src="../Images4Kids/<?php echo $row['image'] ?>" alt="" width="200px"></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><a href="#" class="update">Update</a></td>
            <td><a href="delete.php? productId =  <?php echo $row['productID'] ?>" class="delete">Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
</body>
</html>