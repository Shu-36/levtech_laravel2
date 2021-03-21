<?php
class animal{
      public $cry = 'bowbow';
       function cry_01() {
       echo $this ->cry . PHP_EOL;
      
      }
}
      class Dog  extends animal {
       public $cry = 'わんわん' . PHP_EOL;

      }
$aa = new Dog();
$aa -> cry_01();
