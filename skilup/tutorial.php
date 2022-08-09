<?php
/* $str ="hello World";
// $int  = 1;
// $float  = 1.1;
// echo "<h1>".$str."<h1>"; #String variable
// echo "<h1>".$int."<h1>";
echo "<h1>".$float."<h1>";
 //arrray
 $array = array('hp','Lenovo','Dell','Asus');
 echo var_dump($array);*/

//  define('laptop','Dell ,Hp and Asus');// Constent
//  echo laptop;

//  define('laptop',['Dell' ,'Hp', 'Asus']);// Constent array
//  echo laptop[2];

//if
$var =3;
// if ($var > 7)
// {
//     echo "The Condition match";
// }else{
//     echo "The Condition did not match";
// }
if ($var % 2 == 0 && $var % 3 ==0)
{
    echo "Divisible by both";
}
elseif($var % 2 == 0)
{
    echo "Divisible by 2";
}
elseif($var % 3 == 0)
{
    echo "Divisible by 3";
}
else{
        echo "The Condition did not match";
    }