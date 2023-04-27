<?php
// PHP divides the operators in the following groups:

// Arithmetic operators
// Assignment operators
// Comparison operators
// Increment/Decrement operators
// Logical operators
// String operators
// Array operators
// Conditional assignment operators
// ArithmeticOperators example
$x=20;
$z=3;
$y= 4;
$sum=$x+$y;
echo $sum;
echo "<br>";
$sub=$x-$y;
echo $sub;
echo "<br>";
$mul=$x*$y;
echo $mul;
echo "<br>";
$div=$x/$y;
echo $div;
echo "<br>";
$mod=$x%$y;
echo $mod;
echo "<br>";
$modl=$x%$z;
echo $modl;
echo "<br>";
$expn=$y**$z;
echo $expn;
echo "<br>";
// string operator
// Concatenation assignment
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;
echo "<br>";

?>

<?php

// ternary operator 
   // if empty($user) = TRUE, set $status = "anonymous"
   $user="";
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
?>
	
<?php
echo("<br>");
	// Null coalescing operator:
   // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
?>  