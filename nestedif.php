<?php
$a=24;
$b=3;
$c=65;
//Using logical operator
// if($a>$b && $a>$c){
//     echo "<br> A is maximum";
// } else if($b > $c){
//     echo "<br> B is maximum";
// } else {
//     echo "<br> C is maximum";
// }
//--Nested if---
if($a>$b){ //24>3
    if($a>$c){ //24>65
        echo "<br> A is maximum";
    } else {
        echo "<br> C is maximum";
    }
} else {
    if($b>$c){
        echo "<br> B is maximum";
    } else {
        echo "<br> C is maximum";
    }
}



?>