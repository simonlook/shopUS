    <?php 
    include "db.php";
    if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == '' || $password == ''){
        echo "<h2>Please fill in all Fields!</h2>";
    }else{
        $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row && $row['email'] == "$email" && $row['password'] == "$password"){
        header("location: admin.php");
    }else{
        echo "<h2>No matching records</h2>";
    }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .login_form{
            background-color: orangered;
            width: 60%;
            transform: translateY(70%);
            margin: 0 auto;
        }
        .login_form h2{
            margin-top: 20px;
            font-size: 50px;
            text-align: center;
        }
        .underline{
            width: 100%;
            height: 2px;
            background-color: black;
            margin-bottom: 20px;
        }
        .login_form form{
    display: flex;
    flex-flow: column nowrap;
    justify-content: center;
    align-items: center;
    padding: 20px 10px;
        }
        p{
            font-size: 25px;
            font-weight: bold;  
        }
        .login_form input{
            padding: 10px;
            width: 50%;
            border-radius: 10px;
            outline: none;
            border: none;
        }
        .login_form .btn{
            font-size: 20px;
            margin-bottom: 20px;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div class="login_form">
        <h2>Login Form</h2>
        <div class="underline"></div>
    <form action="" method="post">
        <p>Email:</p><input type="email" name="email" id="" placeholder="enter your email"> <br>
        <p>Password:</p><input type="password" name="password" id=""> <br>
        <input class="btn" type="submit" name="login" value="login" id=""> 
    </form>
    <a href="../index.php">Go back</a>
    </div>
    

</body>
</html>