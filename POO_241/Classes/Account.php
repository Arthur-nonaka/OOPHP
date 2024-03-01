<?php
class Account {
    public $number;
    public $titled;
    public $balance;
}    
$c1 = new Account;
$c1->number = 1;
$c1->titled = "Arthur";
$c1->balance = 200;
$c2 = new Account;
$c2->number = 2;
$c2->titled = "Pedro";
$c2->balance = 5.69;

Echo "<pre>";
var_dump($c1);
var_dump($c2);

ECHO "</pre>";


