<?php
# php has three variables:
#1.Local 2.Global 3. static 

$num = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $num</p>";
}
myTest();

echo "<p>Variable x outside function is: $num</p>";
?>
<?php
function mylocal() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
mylocal();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>
<?php
function mystatic() {
  static $x = 0;
  echo $x;
  $x++;
}

mystatic();
echo"<br/>";
mystatic();
echo"<br/>";
mystatic();
echo"<br/>";
mystatic();

?>