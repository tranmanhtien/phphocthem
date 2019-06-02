<?php
/**
 * Created by PhpStorm.
 * User: tien tran
 * Date: 6/2/2019
 * Time: 10:46 AM
 */
//nap ket noi csdl
include_once "config.php";
if(isset($_GET['id'])){
    $product_id =(int)$_GET['id'];
    $sqldelete ="DELETE FROM product WHERE id=".$product_id;

    if (mysqli_query($connection, $sqldelete)) {
        echo"xóa thành công";
        header('Location:index.php');
    } else {
        echo "xóa thất bại";
    }
}else
    echo "xóa thất bại";