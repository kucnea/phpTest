<?php

$num1 = 1;
$num2 = 1;
/* 
 * == : 두 값이 같은지
 * === : 두 값이 같고, 형식도 같은지
 *  */

if($num1 === $num2){
    echo "num1과 num2는 같은 수 입니다.<br>";
}else if($num1 > $num2){
    echo "num1은 num2보다 큰 수 입니다.<br>";
}else if($num1 < $num2){
    echo "num1은 num2보다 작은 수 입니다.<br>";
}else{
    echo "num1과 num2는 다른 수 입니다.<br>";
}





?>