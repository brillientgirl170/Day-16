<?php


class Example
{
    public $name= 'Sumi';
    protected $city= 'Dhaka';
    private $country= 'Bangladesh';
    public $value;

//    public function __construct($data)
//    {
////        $this->value=  $data;
////        echo $data;
//    }

    public function addition() {
        echo 'In addition';
//        $this-> division();  //own class object '$this';
//        echo $this-> name;
    }
    protected function subtraction(){
        echo 'In subtraction';
    }
    private function division(){
        echo 'In division';
    }

}