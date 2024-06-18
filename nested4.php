<?php
$a = 3500;
$b = 4400;
$c = 65;
$d = 220;
if($a > $b){
    if($a > $c){
        if($a > $d){
            echo 'A is maximum';
        } else {
            echo 'D is maximum';
        }
    } else {
        if($c > $d){
            echo 'C is maximum';  
        } else {
            echo 'D is maximum';
        }
    }
} else {
    if($b>$c){
         if($b > $d){
            echo 'B is maximum';
         } else {
            echo 'D is maximum';
         }
    } else {
        if($c > $d){
            echo 'C is maximum';  
        } else {
            echo 'D is maximum';
        }
    }
}

?>