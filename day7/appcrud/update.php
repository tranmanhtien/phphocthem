<?php
/**
 * Created by PhpStorm.
 * User: tien tran
 * Date: 5/30/2019
 * Time: 9:04 PM
 */
include "config.php";
if(isset($_POST['id'])&&isset($_POST['name'])&&isset($_POST['address'])&&isset($_POST['salary'])){
    if($_POST['name']&&$_POST['address']&&$_POST['salary']>0){
        $name=$_POST['name'];
        $address=$_POST['address'];
        $salary=$_POST['salary'];
        $sqlinsert="UPDATE employees SET name='$name',address='$address',salary='$salary' WHERE id=".(int)$_POST['id'];
        if (mysqli_query($connection, $sqlinsert)) {
            echo"sửa thành công";
            header('Location:index.php');
        } else {
            echo "sửa thất bại";
        }
    }
}