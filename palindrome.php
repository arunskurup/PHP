<?php
//read string
$a = (string)readline('Enter the String: ');
$rev =strrev($a);
$print = "String is not palindrome";
if ($rev == $a){
    $print = "String is  palindrome";
}
echo $print.PHP_EOL;