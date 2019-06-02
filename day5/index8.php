<?php
/**
 * Created by PhpStorm.
 * User: tien tran
 * Date: 5/23/2019
 * Time: 8:55 PM
 */
class Hinhtron{
    public static $r;

    public static function datBankinh($r){
//        khi mà truy cập vào thuộc tính hay phương thức không có từ khóa static
//        thì ta dùng $this->tenthoctinh va $thí->tenphuongthuc
//            Khi mà truy cập vào thuộc tính hay từ khóa có chứa static
//        thì ta dùng từ khóa self thay cho $this
//            và sẽ viết là seft::tenphuongthuc() và seft::tenthuoctinh;
        seft::$r=$r;
        return seft::$r;
    }

    //$r là bán kính của hình tròn

    public static function tinhchuvi($r){
        $cv=$r*2*3.14;
        return $cv;
    }

    public static function tinhdientich($r){
        $cv=$r*$r*3.14;
        return $cv;
    }
}
//khơi tạo dối tượng thông thường
//$doituong=new tenclass();
gọi đến thuộc tính hay phương thức của class
thì sẽ phải gọi qua đối tượng
//$doituong->tenthuoctinh;
//$doituong->tenphuongthuc();

/**
 * khi class có các thuộc tính hay phương thức có từ khoá static
 * thì không cần khởi tạo đối tượng bằng từ khoá new
 * gọi đến thuộc tính statuc bằng cách
 * TenClass::TenThuocTinh;
 * gọi đến phương thức static bằng cách
 * TenClass::TenPhuongThuc();
 *
 *
 */
$bankinh = Hinhtron::datBankinh(5);
echo "<br> bankinh ". $bankinh;
$chuvi = Hinhtron::tinhchuvi(5);
echo "<br> chuvi ". $chuvi;
$dientich = Hinhtron::tinhdientich(5);
echo "<br> dientich ". $dientich;