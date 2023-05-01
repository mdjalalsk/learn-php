<?php
//  PHP - Sort Functions For Arrays
// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key 
//indexed array sort:
$numbers = array(4, 6, 2, 22, 11);
// rsort($numbers);
sort($numbers);

$arraylength=count($numbers);
// echo $arraylength;
for ($i=0; $i<$arraylength;$i++){
    echo $numbers[$i]."<br/>";
}


// Associative Arrays sort examples:
$age= array("jalal"=>"26","mohim"=>"24","asif"=>"27");
// asort($age);
//  arsort($age);
// ksort($age);
 krsort($age);

foreach($age as $key=>$val){
    echo $key."=".$val."<br>";
}