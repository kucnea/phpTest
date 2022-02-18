<?php

    $num1 = 1;
    $num2 = "1";
    
    if($num1 === $num2){
        echo "두 변수는 동일하다.<br>";
    }else{
        if($num1 == $num2){
            echo "두 변수는 값은 같지만 형식이 다르다.<br>";
        }else{
            echo "두 변수는 값이 다르다.<br>";            
        }
    }


?>