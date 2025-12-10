<?php

$num1 = 8;
$num2 = 3;
$num3 = 9;

if ($num1 > $num2 && $num1 > $num3){
    echo $num1 . " is the largest";
} 
elseif($num2 > $num1 && $num2 > $num3){
    echo $num2 . " is the largest";
} 
else{
    echo $num3 . " is the largest";
}

?>