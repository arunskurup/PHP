<?php

  function test($num)
  {
    return $num % 3 == 0 || $num % 7 == 0 ;
  }

  var_dump(test(3));
  var_dump(test(14));
  var_dump(test(12));
  var_dump(test(37));
//   $num = (int)readline("Enter the Number : ");
//   var_dump(test($num));