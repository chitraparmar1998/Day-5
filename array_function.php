<?php
//numercal array
//count()
$arr=array('php','java','python','c');
echo count($arr);

//array_count_values()
$arr=array("php","java","python","c");
$newarr = array_count_values ($arr);
foreach($newarr as $key => $value){
    echo "<br/> $key - <strong>$value</strong>";
   
}

//array_sum()
$myarray = array(1,2,3,4);
echo array_sum($myarray);

//array_product()
$myarray = array(1,2,3,4);
echo array_product($myarray);

//array_reverse
$arr=array('php','java','python','c');
$revarr = array_reverse($arr);
print_r($revarr);

//in_array
$arr=array('php','java','python','c');
$temp = in_array('php','$arr');
echo $temp;

//aray_rand
$arr=array('php','java','python','c');
$indexofarray = array_rand($arr);
echo $arr[$indexfarray];

//select multiple keys at random
$arr=array('php','java','python','c');
$indexofarray = array_rand($arr,2);

foreach ($indexofarray as $key => $value)
{
    echo"<br/>$key - <strong>". $arr[$value]."</strong>";
 
}


//array_unique
$arr=array('php','java','python','c');
print_r(array_unique ($arr));

//array_merge()
$arr1=array('php','java','python','c');
$arr2=array(10,20,30,40);

$Newarr = array_merge ($arr1,arr2);
print_r($NewArr);

//array_search
$myarr=array('php','java','python','c');
$check = array_search ('php',$myarr);
echo $check;

//range()
$arr = range ("11","20");
foreach($arr as $key => $value)
{
    echo"<br/> $key - $value";
}

//sort()
$arr = array (70,50,40);
sort($arr);
print_r($arr);

//rsort()
$arr = array (70,50,40);
rsort($arr);
print_r($arr);

//asort()
$arr = array (70,50,40);
asort($arr);
print_r($arr);

//ksort()
$arr = array(
    "Sky" => "Blue",
    "Tree" => "Green");
ksort($arr);
foreach ($arr as $key => $value){
    echo "<br/> $key - $value";
}

//krsort()
$arr = array(
    "Sky" => "Blue",
    "Tree" => "Green");
krsort($arr);
foreach ($arr as $key => $value){
    echo "<br/> $key - $value";
}

//shuffle()
$myArray = array ("Table","Chair");
shuffle ($myArray);
foreach ($myArray as $key => $value){
    echo "<br/> $value";
}

//array_key_exists()
$arr = array ("a" => "apple", "b" => "ball");
echo array_key_exists ('a',$arr);

//array_change_key_case()
$arr = array(
    "Sky" => "Blue",
    "Tree" => "Green");
$uppercase = array_change_key_case ($arr,CASE_UPPER);
print_r($uppercase);

//array_combine()
$arr1=array("Table","Chair");
$arr2=array("Blue","Green");
$NewVar = array_combine($arr1,$arr2);
print_r($NewVar);

//end()
$myArray = array ('Table','Chair');
echo end ($myarr);

//compact()
$name = "Chitra";
$subject = "php";
$arr = compact ("name","subject");
print_r($arr);

//array_flip()
$arr = array ("c" => "chitra", "b" => "ball", "d" => "doll");
$fliparray = array_flip ($arr);
print_r($fliparray);

//array_diff()
$a = array ("chitra","php","c");
$b = array ("chitra","python");
$diff = array_diff($a,$b);
print_r($diff);

//array_interest()
$arr1=array(0 => "Table",1 => "Chair");
$arr2=array(2=>"Blue",3=>"Green");
print_r(array_intersect($arr1,$arr2));

//array_values()
$arr = array ("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values($arr);
foreach($myarr as $key => $vlues){
    echo"<br/>$key - $value";
}

//array_push()
$a=array("php","python");
array_push($a,"java","c");
print_r($a);

//array_pop()
$a=array("php","python");
array_pop ($a);
print_r($a);
array_pop($a);
print_r($a);

//expload()
$mystring= "I Love Baking";
$arr = explode(" ",$mystring);
print_r($arr);

//impload()
$arr= array ("I Love Baking");
$mystring = implode(" ",$arr);
echo $mystring;
?>

