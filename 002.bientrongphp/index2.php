<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>comment trong php</h1>
<pre>
   comment thì chạy mà chỉ được dùng để giải thích code cho các lập trình viên
    phân biệt được sự khác biệt kho echo giá trị 1 biến
    bằng nháy kép "" hoặc nháy đơn
    nếu trong nháy keeos có $a thì sẽ in ra giá trị của biến đó
    nếu trong nháy đơn có $a thì php sẽ hiểu đó là 1 chuỗi bình thường


</pre>
<?php
/*
 * comment nhiều
 * dòng*/
//comment 1 dòng
$a=5;
echo" dùng nháy kép: $a bằng".$a;
echo"<br>";
echo'dùng nháy đơn:$a bằng:'.$a;
?>
</body>
</html>