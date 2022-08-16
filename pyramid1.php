<?php
//read number
$a = (int)readline('Enter an number: ');

for($i=0;$i <= $a;$i++){
    for($l=1;$l <= $a-$i;$l++){
        echo" ";
    }
    for($l=1;$l <= $i;$l++){
        echo$l." " ;
    }
    echo PHP_EOL;
}