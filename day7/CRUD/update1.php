<?php
/**
 * Created by PhpStorm.
 * User: tien tran
 * Date: 5/30/2019
 * Time: 9:04 PM
 */
include "config.php";
if(isset($_POST['id'])&&isset($_POST['name'])&&isset($_POST['quantity'])&&isset($_POST['brand'])&&isset($_POST['created_at'])){
    if($_POST['name']&&$_POST['quantity']&&$_POST['brand']&&$_POST['created_at']&&$_POST['price']>0){
        $name=$_POST['name'];
        $quantity=$_POST['quantity'];
        $price=$_POST['price'];
        $brand=$_POST['brand'];
        $created_at=$_POST['created_at'];
        $sqlupdate="UPDATE product SET name='$name',quantity='$quantity',price='$price',created_at='$created_at',brand='$brand' WHERE id=".(int)$_POST['id'];
        if (mysqli_query($connection, $sqlupdate)) {
            echo"sửa thành công";
            header('Location:index.php');
        } else {
            echo "sửa thất bại";
        }
    }
}