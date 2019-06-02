<?php
/**
 * Created by PhpStorm.
 * User: tien tran
 * Date: 5/30/2019
 * Time: 7:08 PM
 */
//cach khai báo hằng số
define("SEVERNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","appcrud");

$connection=mysqli_connect(SEVERNAME,USERNAME,PASSWORD,DBNAME);
//kiển tra kết nối đén sql có thành công không
//nêu k sẽ ngắt chương trình
if(!$connection){
    die("Kết nối CSDL lỗi:".mysqli_connect_error());
}