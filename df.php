<?php
/**
 * Created by PhpStorm.
 * User: fcm
 * Date: 2016/11/22
 * Time: 11:29
 */
//include 包含文件应用示例，语法-- include 'filename';
include 'menu.php';
include "../html/testPhp.php";

echo "<p>漂亮------------------</p>";
echo "<p> Hello </p>";
$x=6;
$y=11;
$z=$x+$y;
echo "<p>the result is $z  </p>";


if(is_int($x)){//判断变量类型
    echo "<p> is int </p>";
}

function myTest() {//函数使用方法
    static $x=0;//静态变量使用方法
    echo  "<p>$x</p>";
    $x++;
    return $x;
}

myTest();
myTest();
myTest();

class Car
{//定义类
    var $color;
    function Car($color="green") {
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
}

function print_vars($obj) {
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "\t  $prop = $val  \n";
    }
}

// instantiate one object
$herbie = new Car("white");

// show herbie properties
echo " her car bie: Properties\n";
print_vars($herbie);

//include 包含文件应用示例，语法-- include 'filename';
include 'footer.php';
include "../html/homePage.html";