<?php
echo"while loop:<br>";
$x=1;
while($x<=5){
    echo"The Number :$x <br>";
    $x++;
}
echo" do...while loop:<br>";
$y=5;
do{
    echo "The Number :$y <br>";
    $y+=5;
}while($y<=30);
echo" for loop:<br>";
$z=20;
for($i=0;$i<=$z;$i+=5){
    echo"The Number :$i <br>";
}
echo" foreach loop:<br>";
$friend= array("alamin","aslam","asif");
foreach($friend as $val){
    echo "$val<br>";
}
$age=array("alamin"=>"25","aslam"=>"26","asif"=>"28");
foreach($age as $name=>$value){
    echo"$name=$value<br>";
}
