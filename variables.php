<?php

$message = "Hello again!";
$count = 3;
$price = 1.99;

var_dump($message);
var_dump($count);
var_dump($price);

$is_admin = true;
$data = null;

var_dump($is_admin, $data);

$fname = "injae";
$lname = "lee";

echo $fname . " " .  $lname; 
 
$price = "150";
$quantity = 3;

$price = $price * $quantity;

var_dump($price);

$is_editor = true;
$is_bishop = false;

var_dump( ! $is_editor);

$start = "2 o'clock";
$end = '4 o\'clock';

echo $start, $end;

$days = "Monday\nTuesday\nWendnesday";
echo $days;

echo 'Hello {$fname}';
echo "Hello {$fname}";


