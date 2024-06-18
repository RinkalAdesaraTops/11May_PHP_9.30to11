<?php
$a = 3500;
$b = 440;
$c = 65;

if($a > $b){
    if($a > $c){
        echo "A is maximum";
    } else {
        echo "C is maximum";
    }
} else {
    if($b > $c){
        echo "B is maximum";
    } else {
        echo "C is maximum";
    }
}


?>