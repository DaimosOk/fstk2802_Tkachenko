<?php
$a = 5;
$b = 0;
$operator = "*";

if ($b == 0){
    echo "На ноль делить нельзя!";
} elseif ($operator == "+"){
    echo $a+$b;
} elseif ($operator == "-"){
    echo $a-$b;
} elseif ($operator == "/"){
    echo $a/$b;
} elseif ($operator == "*"){
    echo $a*$b;
} elseif ($operator == "%"){
    echo $a%$b;
}