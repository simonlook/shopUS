<?php
include "db.php";
    if(isset($_GET['productID'])){
        $productID = $_GET['productID'];
        $sql = "delete from products where productID = '$productID'";
        $result = mysqli_query($conn,$sql);
        if(!$result){
            echo "Error!: {$conn->error}";
        }
    }else{
        echo "Deleted Successfully";
    }
?>