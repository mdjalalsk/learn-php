<?php
for($i=0;$i<=10;$i++){
    if($i== 6){
        break;
    }
    echo "Print the number: $i <br/>";
}
echo "<h1>continue statement</h1>";
for($j=1;$j<10;$j++){
    if($j== 6){
        continue;
    }
    echo "Print the number: $j <br/>";
}