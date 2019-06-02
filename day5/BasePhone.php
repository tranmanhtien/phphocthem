<?php
/**
 * Created by PhpStorm.
 * User: tien tran
 * Date: 5/23/2019
 * Time: 7:19 PM
 */

class BasePhone
{
    public $name;

    public  $model;

    public  $manufacture;

    public function __construct($name,$model,$manufacture)
    {
        $this->name=$name;
        $this->model=$model;
        $this->manufacture=$manufacture;
    }

    //gửi tin nhắn
    public function sendSms($phone){
        echo "<br>". __METHOD__."".$phone;
    }

    //nhận tin nhắn
    public function receiveSms($phone){
        echo "<br>". __METHOD__."".$phone;
    }

    //gọi điện
    public function callNumber($phone){
        echo "<br>". __METHOD__."".$phone;
    }

    //nhận cuộc gọi
    public function receiveNumber($phone){
        echo "<br>". __METHOD__."".$phone;
    }
}

//class smartphone kế thừ từ class basephone
//extends== kế thừa từ 1 class cha
//khi 1 class kế thừa từ 1 class cha class con sẽ tự dộng có tất cả các thuộc tính và phương thức public hay protected của class cha
//class Smartphone
class SmartPhone extends BasePhone{
    public function __construct($name, $model, $manufacture)
    {
        parent::__construct($name, $model, $manufacture);
    }

    public function sendEmail($address_email){
        echo "<br>".__METHOD__." ".$address_email;
    }

    public function facebook($acount){
        echo "<br>".__METHOD__." ".$acount;
    }

    public function playGame($game){
        echo "<br>".__METHOD__." ".$game;
    }
}

$samsungi2= new SmartPhone('Samsungi2','i2','samsung');

$samsungi2->sendSms('112211221');
$samsungi2->facebook('âdadadada');
echo "<pre>";
print_r($samsungi2);
echo "</pre>";