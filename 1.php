<?php
  
  function test($number,$number2)
  {
    return $number == $number2 ? ($number + $number2)*3 : $number + $number2;
  }

  echo test(1, 2)."\n";
  echo test(3, 2)."\n";
  echo test(2, 2)."\n"; 