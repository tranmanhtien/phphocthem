<?php
/**
 * Created by PhpStorm.
 * User: tien tran
 * Date: 5/23/2019
 * Time: 8:10 PM
 */
class Test{
    public  $a=5;

    protected $b=6;

    private  $c=3;
}
class Test1 extends Test{
    public function truycapthuoctinhpubliccha(){
        echo "<br>".__METHOD__."".$this->a;
    }
    public function truycapthuoctinhprotectedcha(){
        echo "<br>".__METHOD__."".$this->b;
    }
    public function truycapthuoctinhprivatecha(){
        echo "<br>".__METHOD__."".$this->c;
    }
}
$t1= new Test1();
$t1->truycapthuoctinhpubliccha();
$t1->truycapthuoctinhprotectedcha();
$t1->truycapthuoctinhprivatecha();