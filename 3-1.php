<?php
  
  function test($num,$num2)
  {
     return ($num == 30 || $num2 == 30 || $num+$num2 == 30);
  }

//   var_dump(test(30, 0));
//   var_dump( test(25, 5));
//   var_dump( test(20, 30));
//   var_dump(test(20, 25));  

//with im put
 
 $num = (int)readline('Enter First Number : ');
 $num2 = (int)readline('Enter Second Number : ');

 var_dump(test($num, $num2));