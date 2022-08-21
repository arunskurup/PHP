<?php

   function test($str)
   { 
     $len = strlen($str);
     return $str[$len-1].$str.$str[$len-1];
   }
   echo test("Red")."\n";
   echo test("Green")."\n";
   echo test("1")."\n";