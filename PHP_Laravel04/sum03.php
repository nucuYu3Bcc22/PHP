<?php
function product($arr){
    $result = $arr[0]; 
    for ($i = 1; $i < count($arr); $i++) {
            $result *= $arr[$i];
    }
    return $result;
}
echo product(array(1, 3, 5 ,7, 9)),"\n";