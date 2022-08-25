class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer
 */
function threeSumClosest($nums, $target) {
      
    $len =count($nums);
    if($len == 3){
        $item = $nums[0];
        $num1 = $nums[1];
        $num2 = $nums[2];
        $tot = $item + $num1 + $num2 ;
        return $tot;
    }else{
    foreach($nums as $key=>$item){
        $num1 = $nums[$key+1];
        $num2 = $nums[$key+2];
        if($key+2 >= $len){
            $num2 = $nums[1];
        }
        if($key+1 >= $len){
            $num1 = $nums[1];
            $num2 = $nums[2];
        }
        
       $tot[$key] = $item + $num1 + $num2 ;
        echo $item.'+'.$num1.'+'.$num2.'='.$tot[$key].",";
        
    }
        
         $smallest = [];

        foreach ($tot as $i) {
               $smallest[$i] = abs($i - $target);
            if($i == $target){
                return $target;
            }
                }
         asort($smallest);
       return key($smallest);
    }
    
}
}