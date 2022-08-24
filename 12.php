<?php
// Write a PHP program to check if one given temperatures is less than 0 and the other is greater than 100.

  function test($num1,$num2)
  {
     return ($num1 < 0 && $num2 > 100) || ($num2 < 0 && $num1 > 100);
  }  

  var_dump(test(120, -1));
  var_dump(test(-1, 120));
  var_dump(test(2, 120));