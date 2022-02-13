<?php


namespace App\classes;


class User
{
protected  $name = 'BITM';
protected  $city = 'Dhaka';

public function index()
{
    echo 'Institution name is '.$this->name.' and the city name is '.$this->city;
}
}