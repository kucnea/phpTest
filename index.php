<?php
class Person{
    public $num;
    
    public function __construct(){
        $this -> num = 4;
    }
    
    public function getNum(){
        echo $this -> num;
    }
}

$person = new Person();

$person-> getNum();
echo "<br>";
echo $person -> num;
echo "<br>Class Part 종료!!!";


$list = array();
$list[0] = "사과";
$list[1] = "바나나";
$list[2] = "오렌지";
echo "<br><br>";
echo $list[0];

echo "<br><br>";
$list1 = array("토끼","개구리","독수리");
echo $list1[0];
$list1[3] = "고래";

echo "<br>".$list1[3];

$arr = array(1,2,3,4,5);
echo "가장 큰 수는 ".max(1,2,3,4,5)."입니다.";

echo "<br>수학관련 함수 종료!!! <br><br>";

    
function varFunc(){
    $var = 10;
    $var2 = 8;
    echo "함수 내부의 var값은 ($var) 입니다.<br>";
    echo "함수 내부의 var값은 ($var) 입니다.<br>";
}
echo "<br>";
varFunc();
/* 이 변수는 접근할 수 없음. */
/* echo "함수 내부의 var값은 ($var) 입니다.<br>"; */

echo "<br><br><br> 전역 변수 함수 내/외부 part.2<br>";
$var = 10;
$var = 11;
function varFunc2(){
       
    /* 불가넝 */
    /* echo "합수 내부에서 접근하는 전역 변수 var의 값은 ($var)입니다.<br>"; */
    /* 가넝 */
    global $var;
    echo "합수 내부에서 접근하는 global 변수 var의 값은 ($var)입니다.<br>";
    /* 당연히 안됨 */
    /* echo "합수 내부에서 접근하는 전역 변수 var2의 값은 ($var2)입니다.<br>"; */
        
}
varFunc2();
echo "합수 밖에서 접근하는 전역 변수 var의 값은 ($var)입니다.<br>"



?>