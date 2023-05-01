<?php
$friends=array("mohim","ismail","asif","sayeed");
echo count($friends);
echo "<br/>";
echo sizeof($friends);
echo "<br/>";
if (in_array('alamin',$friends)){
    echo "find successfully";
}else{
    echo "find failed";
}
echo "<br/>";
if(array_search("rofic",$friends)){
    echo "successfully";
}else{
    echo "failed";
}