<?php
 
 function test($num)
  { 
    //  if (abs(100-$num) <= 10 || abs(200-$num) <= 10){
    //     return true;
    //  }
    //  return false;
    return ((abs(100-$num) <= 10 || abs(200-$num) <= 10));
  }

  var_dump(test(103));
  var_dump(test(90));
  var_dump(test(89));  