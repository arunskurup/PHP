<?php
  function test($num)
  {
    $x =51;
    return $num > $x ? ($num-$x)*3 : $x - $num;
  }
//   $num = (int)readline('Enter an number: ');
//   echo test($num)."\n";

  echo test(53)."\n";
  echo test(30)."\n";
  echo test(51)."\n";  
  