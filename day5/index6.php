<?php
/**
 * Created by PhpStorm.
 * User: tien tran
 * Date: 5/23/2019
 * Time: 8:16 PM
 */
class Test{
    public  $a=5;

    protected $b=6;

    private  $c=3;

    /**
     * Chỉ có thể truy cập vào các phương thức hay các thuộc tính
     * có giới hạn truy cập private trong chính bản thân class đó
     */
    public function getb(){
        echo"<br>".__METHOD__." ".$this->b;
    }
    public function getc(){
        echo"<br>".__METHOD__." ".$this->c;
    }
}
$tl= new Test();
$tl->getc();
$tl->getb();
