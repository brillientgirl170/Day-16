<?php
require_once 'Example.php';

class Demo extends Example
{
    public $age= 22;
    protected $location= 'Farmgate';
    private  $mobile= '01770223960';
    
    public function newOne()
    {
//        echo 'In new one';
        $this->addition();
    }
    protected function newTwo()
    {
        echo 'In new Two';
    }
    private function newThree()
    {
        echo 'In new Three';
    }
}