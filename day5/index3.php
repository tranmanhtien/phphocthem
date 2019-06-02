<?php
/**
 * Created by PhpStorm.
 * User: tien tran
 * Date: 5/23/2019
 * Time: 7:50 PM
 */
class Test{
    //những thuộc tính khai báo giwos hạn truy cập là public thì có thể truy cập ở mọi nơi
    public $a=5;

    protected $b=3;

    private $d=3;
}
$t=new Test();
echo "<br>".$t->a;

//truy cập vào thuộc tính có giới hạn truy cập là protected
//cannot access procted property
echo "<br>".$t->b;

// truy cập vào thuộc tính có giới hạn truy cập là private
// Cannot access private property
echo "<br>" . $t->d;
