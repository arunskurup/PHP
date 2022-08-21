<?php

  function test($str)
  {
   $len = strlen($str);
   return $len <1 ? $str:substr($str,$len-1).substr($str,1,$len-2).substr($str, 0, 1);
  }
  echo test("abcd")."\n";
  echo test("a")."\n";
  echo test("xy")."\n";