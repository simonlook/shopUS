<?php
include "db.php";
    if(isset($_GET['deleteID'])){
        $productID = $_GET['deleteID'];
        $sql = "DELETE FROM products WHERE productID = $productID";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: display.php");
        }
    }else{
        echo "An error occured ";
    }
?>