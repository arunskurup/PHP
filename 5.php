<?php
   function test($string)
       {
          return (strlen($string) >= 2 && substr($string,0,2) == 'if'  ?  $string : "if ".$string );
       }
       echo test("if else")."\n";
       echo test("else")."\n";
       echo test("if")."\n";