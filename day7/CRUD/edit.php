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

$name='';
$address='';
$salary='';

//kiểm tra đã submit chưa
if(isset($_GET['id'])){
    $product_id =(int)$_GET['id'];
    $sqlselect ="SELECT * FROM product WHERE id=".$product_id;
    $result = mysqli_query($connection, $sqlselect);
    $row = mysqli_fetch_assoc($result);

    $name=isset($row['name'])?$row['name']:'';
    $quantity=isset($row['quantity'])?$row['quantity']:'';
    $price=isset($row['price'])?$row['price']:'';
    $brand=isset($row['brand'])?$row['brand']:'';
    $created_at=isset($row['created_at'])?$row['created_at']:'';

}


?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form name="edit" action="update1.php" method="post">
                <input type="hidden" name="id" value="<?php echo (int)($_GET['id']) ?>">
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $name?>">
                </div>
                <div class="form-group">
                    <label>Số lượng</label>
                    <input type="text" class="form-control" name="quantity" value="<?php echo $quantity?>">
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input type="text" class="form-control" name="price" value="<?php echo $price?>">
                </div>
                <div class="form-group">
                    <label>Nhà sản xuất</label>
                    <input type="text" class="form-control" name="brand" value="<?php echo $brand?>">
                </div>
                <div class="form-group">
                    <label>Ngày tạo</label>
                    <input type="date" class="form-control" name="created_at" value="<?php echo $created_at?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>