<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<?php
//nap ket noi csdl
include_once "config.php";

//kiểm tra đã submit chưa
if(isset($_POST['name'])&&isset($_POST['quantity'])&&isset($_POST['brand'])&&isset($_POST['created_at'])){
    if($_POST['name']&&$_POST['quantity']&&$_POST['brand']&&$_POST['created_at']&&$_POST['price']>0){
        $name=$_POST['name'];
        $quantity=$_POST['quantity'];
        $price=$_POST['price'];
        $created_at=$_POST['created_at'];
        $brand=$_POST['brand'];
        $sqlinsert="INSERT INTO product(name,quantity,price,brand,created_at) VALUES('$name','$quantity','$price','$brand','$created_at')";
        if (mysqli_query($connection, $sqlinsert)) {
            echo"insert thành công";
            header('Location:index.php');
        } else {
            echo "insert thất bại";
        }
    }
}


?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form name="create" action="" method="post">

                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" class="form-control" name="name" >
                </div>
                <div class="form-group">
                    <label>Số lượng</label>
                    <input type="text" class="form-control" name="quantity" >
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input type="text" class="form-control" name="price" >
                </div>
                <div class="form-group">
                    <label>Nhà sản xuất</label>
                    <input type="text" class="form-control" name="brand" >
                </div>
                <div class="form-group">
                    <label>Ngày tạo</label>
                    <input type="date" class="form-control" name="created_at" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>