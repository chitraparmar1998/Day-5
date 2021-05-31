<?php
//assosiative array
//key=value
//method 1
$a[0]=10;
$a['b']="ball";
$a['php']="web Devlopment";
$a[10]="Ten";
$a[40]=40.40;

//method 2
//always use this method to create an array
$a=array(
    0 => 10,
    "b" => "ball",
    "php" => "eb Devlopment",
    10 => "Ten",
    40 => "40.40"
);
//print value
echo "B for". $a['b'];

foreach ($a as $value){
    echo "<br>value is $value";
    
    foreach ($a as $key => $value){
    echo"<br/>key is <b> $key </b> and value is <b> $value </b>";
    
}


//3 inbuilt functions to debug an array
echo"<pre>";
print_r($a);
echo"<pre>";
echo"<pre>";
var_dump($a);
echo"<pre>";
        



