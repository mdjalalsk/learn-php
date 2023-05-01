<?php 
function studentname($firstname,$lastname){
    echo "$firstname.$lastname";
}
studentname("Jalal","S k");
echo "<br/>";
studentname("Mohim","Molla");
echo "<br/>";

function addfun(int $a, int $b){
    return $a+$b;
}
echo addfun(10,15);
echo "<br/>";
echo addfun(10000,1500);