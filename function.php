<?php
 function sum_number($min_number, $max_number){
    $result=0;
    for ($i=$min_number; $i<=$max_number; $i++){
     $result= $result+$i;
    }
    echo $result . PHP_EOL;
 }
   sum_number(1,9);
?>
