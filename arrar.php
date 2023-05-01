<?Php
// php has three types arrays:
// Indexed arrays
// Associative Arrays
// multidimensional arrays

// Indexed arrays examples:
$friuts=array('apple','Orange','banana');
$arraylenth=count($friuts);
echo $arraylenth;
echo " <br>I like ". $friuts[1]." and ".$friuts[0]."<br>";
for ($i=0; $i<$arraylenth; $i++){
    echo $friuts[$i]. "<br>";
}

// Associative Arrays examples:
$age= array("mohim"=>"24","jalal"=>"26","asif"=>"27");
echo $age['mohim']. "<br>";
echo $age['jalal']. "<br>";
echo $age['asif']. "<br>";
foreach($age as $key=>$val){
    echo $key."=".$val."<br>";
}
// Multidimensional Arrays example 
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>