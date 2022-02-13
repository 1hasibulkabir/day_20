<?php

namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\Category;
class Student extends Teacher implements ExampleOne,ExampleTwo

{
    use Category;
protected $country = 'Bangladesh';
public static $area = 'Farmgate';
public function __construct()
{
    $this->name = 'Hasib';
    $this->city = 'Barishal';
}
    public function manage()
{
    echo self::$area;
    //echo 'Institution name is '.$this->name.' and the city name is '.$this->city;
}

    public function one()
    {
        echo "hello one";
    }

    public function two()
    {
        echo "hello two";
    }

    public function three()
    {
        echo "hello three";
    }

    public function ten()
    {
        echo 'Ten';
    }

    public function ten1()
    {
        echo 'Ten1';
    }

    public function test()
    {
        echo 'Hello Test';
    }
    public static function demo(){
    echo 'Demo';
    }
}