<?php

  function remove(){
  	      $string = (string)readline('Enter the String: ');
          $string = str_replace(" ", "-", $string);
          return $string;
        }

   echo remove()."\n";