<?php

  function test($str)
     {
        $len = strlen($str);
        $pr = "";
        for($i=0;$i <4 ; $i++){
         $pr = $pr.substr($str ,0,2);
        }
        return $len < 2 ? $str:$pr;
     }
     echo test("C Sharp")."\n";
     echo test("JS")."\n";
     echo test("a")."\n";