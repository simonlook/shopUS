<?php
include "Loging/db.php";

if(isset($_POST['submit'])){
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];

    if($userName == '' || $email == '' || $gender == '' || $phone == '' || $message == ''){
        echo 'You must insert into all fields';
        header("Location: index.php");
    }
    else{
        $sql = "INSERT INTO users(userName,email,gender,phone,message) VALUES ('$userName','$email','$gender','$phone','$message')";
        $result = mysqli_query($conn,$sql);
        header("Location: index.php");
    }
}

?>

<?php 

$sql = "select * from users";
$result = mysqli_query($conn,$sql);
    if(!$result){
        echo "Error: ";
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
            <li><a href="Loging/add.php">Add Products</a></li>
            <li><a href="Loging/display.php">View Products</a></li>
            <li><a href="users.php">View Users</a></li>
            <li><a href="Loging/logout.php">Logout</a></li>
        </ul>
    <div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum tempora obcaecati eveniet illum, porro iusto quisquam soluta assumenda omnis animi.</p>
        <div class="product-section">
     <?php  while($row = mysqli_fetch_assoc($result)){ ?>
            <div class="product"> 
                <h4>UserName: <?php echo $row['userName'] ?></h4>
                <p> Email: <?php echo $row['email'] ?></p>
                <p> Gender: <?php echo $row['gender'] ?></p>
                <p> Phone: <?php echo $row['phone'] ?></p>
                <p> Message: <?php echo $row['message'] ?></p>
                <p><a href="#" class="update">Update</a></p>
                <p><a href="#" class="delete">Delete</a></p>
            </div>
        <?php  } ?>
        </div>
    </div>
    </div>
</body>
</html>
   
