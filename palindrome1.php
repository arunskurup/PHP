<?php
//read string
$a = (string)readline('Enter the String: ');
$len =strlen($a);
$print = "String is  palindrome";
$c=$len-1;
for($l=0;$l<$len;$l++){
  
    if ($a[$c] != $a[$l]){
        
        $print = "String is not palindrome";
    }
   $c--;
    
}
echo $print.PHP_EOL;