<?php

class User
{
    public $key = 'some';
}

$obj = new User();
//$obj->key; // some
print_r($obj->key);

$propertyName = 'key';
$obj->$propertyName = 'value';
//$obj->$propertyName; // value
//$obj->key; // value
print_r($obj->key);

class User1
{
    public $num1 = 8;
}

$obj1 = New User1;
$newNum = 'num1';
$obj1->$newNum = 18*8;
print_r($obj1->$newNum);

