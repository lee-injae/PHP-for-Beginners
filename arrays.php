<?php 

$numbers = array (1,2,3);

$numbersArr = [1,2,3];

var_dump($numbers);

echo $numbers[0];

$articles = [ 
    'a' => "first", 
    'b' => "second", 
    'c' =>"third"
];

var_dump($articles);

$articles2 = [ 
    "one" => "first", 
    "four"=> "second", 
    "third"
];

var_dump($articles2);

echo($articles2["four"]);


$count = 3;
$price = 9.9;

$values = [
    "msg" => "Hello",
    "count" => 100,
    "pi" => 3.14,
    "status" => false,
    "result" => null
];

var_dump($values);

$values2 = [$count, $price];
var_dump($values2);

$alice = [
    "name" => "Alice",
    "email" => "alice@a.com",
    "height" => 180
];

$bob = [
    "name" => "Bob",
    "email" => "bob@a.com",
    "height" => 175
];

$carol = [
    "name" => "Carol",
    "email" => "carol@a.com",
    "height" => 170
];

$table = [$alice, $bob, $carol];
var_dump($table);

var_dump($table[2]['email']);

foreach($numbers as $index => $numbers){
    echo $index . ' - ' . $numbers, ", ";
}

foreach ($articles as $index => $article) {
    echo $index . ': ' . $article, ", ";
}


