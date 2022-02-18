<?php

function staticTest(){
    static $count=0;
    echo "함수 내부의 static 변수 count의 값은 ($count)입니다.<br>"; 
    $count++;
}

staticTest();
staticTest();
staticTest();

function normalVar(){
    
    $count1 = 0;
    echo "함수 내부의 static 변수 count1 의 값은 ($count1)입니다.<br>";
    $count1++;
    
}

normalVar();
normalVar();
normalVar();

?>