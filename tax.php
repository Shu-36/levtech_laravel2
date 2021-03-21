<?php
class tax{ 

     
 public function result($money, $percent){
   echo $money *  $percent . '円です。'.  PHP_EOL;
 }

}


$tax = new tax();
$tax->result(100, 1.08);
