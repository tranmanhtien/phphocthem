<?php
/**
 * Created by PhpStorm.
 * User: tien tran
 * Date: 5/23/2019
 * Time: 6:43 PM
 */

class Student
{
    //    khai báo thuộc tính của class
    public  $name;

    public  $age;

    public  $location;

    public  $point;

    //khai báo các phương thức(method)của class
    //hàm khởi tạo của class:hàm này sẽ chạy ngay khi khởi tạo đối tượng từ class
    //Student constructor
    public  function __construct($name_param, $age_param, $location_param)
    {
    //    trong các phương thức của class để gọi đến chính bản thân class thì ta sử dụng $this
        $this->name=$name_param;
        $this->age=$age_param;
        $this->location=$location_param;
    }


    public function calculatePoint($point__arr_param){
        if(is_array($point__arr_param)&&!empty($point__arr_param)){
            $count=0;
            $total=0;
            foreach ($point__arr_param as $key => $value){
                $total+=$value;
                $count++;
            }
            $point=$total/$count;
            $this->point=$point;
        }
        return false;
    }


}

//khởi tạo dối tượng class
$name="tran van an";
$age=21;
$location="hà nội";
$tuan=new Student($name,$age,$location);

echo"<pre>";
print_r($tuan);
echo"</pre>";

$point =array('java'=>4,'php'=>5,'androi'=>6);
//gọi đén phương thức của class
$tuan->calculatePoint($point);

$cal_point=$tuan->point;
echo"diem trung binh :".$cal_point;

echo"<pre>";
print_r($tuan);
echo"</pre>";