<?php
//read number
$a = (int)readline('Enter an number: ');
//loop
  for($i=1;$i<=$a; $i++){
        
        $p='';
        //    echo $i.PHP_EOL;
        if($i % 3 ==0){
            $p='fizz';
        }
        if($i % 5 == 0){
            $p=$p.'buzz';
        }
        if($p){
            echo $p.PHP_EOL;
        }else{
            echo $i.PHP_EOL;
        }

          
     
    }  
 