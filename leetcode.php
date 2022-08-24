<?php
class Solution {

/**
 * @param String $s
 * @return Integer
 */



function romanToInt($s) {
    $len = strlen($s);
     $value=0;
for($i=0;$i < $len;$i++)
{
 if($s[$i] == 'I'){
     $v = 1;
     
    if($s[$i+1] == 'V'){
        $v = 4;
        $i++;
    }elseif($s[$i+1] == 'X'){
        $v = 9;
        $i++;
    }
}elseif($s[$i] == 'V'){
    $v = 5;
}elseif($s[$i] == 'X'){
     $v = 10;
     if($s[$i+1] == 'L'){
        $v = 40;
         $i++;
    }elseif($s[$i+1] == 'C'){
       $v = 90;
        $i++;
    }
    
}elseif($s[$i]== 'L'){
    $v = 50;
}elseif($s[$i] == 'C'){
     $v = 100;
    if($s[$i+1] == 'D'){
        $v = 400;
         $i++;
    }elseif($s[$i+1] == 'M'){
       $v = 900;
        $i++;
    }
   
}elseif($s[$i] == 'M'){
    $v =1000;
} elseif($s[$i] == 'D'){
    $v = 500;
}
    $value = $value+$v;
    
}
return $value;
    
    
}


    

}