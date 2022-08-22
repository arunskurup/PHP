<?php
// Write a PHP program to check two given integers whether either of them is in the range 100..200 inclusive.

 function test($num1,$num2)
 {
    return ($num1 >= 100 && $num1 <= 200) || ($num2 >= 100 && $num2 <= 200);
 }

 var_dump(test(100, 199));
 var_dump(test(250, 300));
 var_dump(test(105, 190));