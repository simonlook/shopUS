



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
            <li><a href="../users.php">View Users</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    <div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum tempora obcaecati eveniet illum, porro iusto quisquam soluta assumenda omnis animi.</p>
    </div>
    </div>
    
</body>
</html>