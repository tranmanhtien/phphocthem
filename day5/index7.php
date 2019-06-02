<?php
/**
 * Created by PhpStorm.
 * User: tien tran
 * Date: 5/23/2019
 * Time: 8:24 PM
 */
class Test{
    public $a=5;
    protected $b=6;
    private $c=7;

    public function methoda(){
        echo "<br>".__METHOD__." ".$a;
    }

    protected function methoda(){
        echo "<br>".__METHOD__." ".$this->b;
    }

    private function methoda(){
        echo "<br>".__METHOD__." ".$this->c;
    }
}
class Test1 extends Test{
    public function truycapvaophuongthucpubliccha(){
        echo "<br>".__METHOD__." ".$this->methoda();
    }

    public function truycapvaophuongthucprotectdcha(){
        echo "<br>".__METHOD__." ".$this->methodb();

    }
    public function truycapvaophuongthucprotectdcha(){
        echo "<br>".__METHOD__." ".$this->methodc();

    }
}
$t1= new Test1();
$t1->truycapthuoctinhpubliccha();
$t1->truycapthuoctinhprotectedcha();
$t1->truycapthuoctinhprivatecha();
/**
 * chỉ có thể truy cập vào các thuộc tính và method protected từ bên trong class kế thừa của nó
 * chỉ có thể truy cập vào các thuộc tính và method private trong chính bản thân class đó
 * phương thức và thuộc tính public thì có thể truy cập ở mọi nơi
 */