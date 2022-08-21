<?php

  function test($str,$num)
    {
        return substr($str ,0 ,$num).substr($str,$num+1,strlen($str)-$num);
    }

    echo test("Python", 1)."\n";
    echo test("Python", 0)."\n";
    echo test("Python", 4)."\n";