    <?php 
    include "db.php";
    $fillRecords = "";
    $NoMatchingRecords = "";
    if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == '' || $password == ''){
        $fillRecords = "Please fill in all Fields!";
    }else{
        $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row && $row['email'] == "$email" && $row['password'] == "$password"){
        header("location: admin.php");
    }else{
        $NoMatchingRecords =  "No matching records!";
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
            background-color: rgba(172, 93, 19, 1);
            width: 60%;
            transform: translateY(40%);
            margin: 0 auto;
            border-radius: 20px;
            border: none;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
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
        form h4{
            color:red;
            font-size: 25px;
            margin-bottom: 10px;
            font-weight: 800;
        }
        form a{
            text-decoration: none;
            font-size: 25px;
            color: green;

        }

    </style>
</head>
<body>
    <div class="login_form">
        <h2>Login Form</h2>
        <div class="underline"></div>
    <form action="" method="post">
        <h4><?php echo $fillRecords ?></h4>
        <p>Email:</p><input type="email" name="email" id="" placeholder="enter your email"> <br>
        <p>Password:</p><input type="password" name="password" id=""> <br>
        <input class="btn" type="submit" name="login" value="login" id=""> 
        <h4><?php echo $NoMatchingRecords ?></h4>
        <a href="../index.php">Back to Dashboard</a>
    </form>
    
    </div>
    

</body>
</html>