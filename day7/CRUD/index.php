<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
/**
 * Nạp kết nối CSDL
 */
include_once "config.php";

$sqlselect="SELECT * FROM product";

//ham thực hiện câu lệnh query
//tham số thứ nhất là biến kết nối csdl $sqlselect
//tham số thứ 2 là câu lệnh truy vấn

$result = mysqli_query($connection, $sqlselect);


?>
<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-12">
            <div>
                <a class="btn btn-primary" href="create.php">Thêm mới</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Nhà sản xuất</th>
                    <th scope="col">ngày tạo</th>
                </tr>
                </thead>
                <tbody>
                <?php
                //mysqli_num_rows() truyền vào tham số của hàng mysqli_query
                //được sử dụng để đếm số bản ghi của cơ sở dữ liệu

                if (mysqli_num_rows($result) > 0) {
                    /*
                     * mysqli_fetch_assoc()truyền vào biến của mysqli_query()
                     * nó dùng để lấy từng bản ghi trả về câu lệnh của sql
                     * $row sẽ là 1 bản ghi trong bảng
                     * */
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']?></th>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['quantity']?></td>
                            <td><?php echo $row['price']?></td>
                            <td><?php echo $row['brand']?></td>
                            <td><?php echo $row['created_at']?></td>
                            <td>

                                <div>
                                    <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id'] ?>">Sửa sản phẩm</a>
                                </div>
                                <div>
                                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>">Xoá sản phẩm</a>
                                </div>

                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "0 có bản ghi nào";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>