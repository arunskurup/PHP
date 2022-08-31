<?php
class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer
 */
function threeSumClosest($nums, $target) {
   
        $i=0;
    $len= count($nums);
    $a = 0;
     $closest = null;
    while( $a < $len){
        $n = 0;
        while( $n < $len){
             if($a != $n){
                 $l = 0;
            while( $l < $len){
                if($a != $l && $l != $n){
                    $tot[$i] = $nums[$a] + $nums[$n] + $nums[$l] ;
                
                     if ($closest === null || abs($target - $closest) > abs($tot[$i] -  $target)) {
                      $closest = $tot[$i];
                       }
                    $i++;
                }
                $l++;
            }     
            }
            $n++;
        }
        $a++;
    }
    return $closest;
   


    
    


}
}