<?php
$text1="It is not a constant";
echo "$text1";// jakon echo  korbo takon "" duble sting and dolar sigin use korta hobe
echo "<br/>";
define("test2","it is a constant value");
echo test2;//jakon echo korbo thakon ""  or dolar sigin use korta hobe na
echo "<br/>";
// constant array 
define("man",["mouth","nose","teeth","hand","face"]);
echo man[3];
echo "<br/>";
?>
<?php
// global constant 
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}
 
myTest();
?>