<?php

  function reverse($str){
    
    //string length
    $len = strlen($str);
    $i=$len-1;
    $rev ='';
    while($i >= 0){
        $rev = $rev.$str[$i];
       $i--;
    }
    return $rev;
  }

  $str = (string)readline("Enter the String : ");

  echo reverse($str)."\n";