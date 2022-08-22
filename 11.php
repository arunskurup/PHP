<!-- Write a PHP program to check if a given string starts with 'C#' or not. -->
<?php
 function test($str)
 {
   return((strlen($str) < 3 && $str = 'C#' )|| substr($str,0,2 ) == "C#");
 }

 
 var_dump(test("C# Sharp"));
 var_dump(test("C#"));
 var_dump(test("C++"));
 