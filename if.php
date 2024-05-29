<?php
//1)If statement 
$age = 25;
if($age>=18){
    echo "<br> You are eligible 4 vote";
}
echo '<br>  Out of Code';
// 2)If_else
$a =10;
$b=25;
if($a>$b){
    echo "<br>A is maximum";
} else {
    echo "<br>B is maximum";
}
$no = 28; 
//Check no is even or odd?
if($no%2 == 0){
    echo "<br>No is even";
} else {
    echo "<br>No is odd";
}
// Else if ladder
//check no is +ve,-ve,or zero
$no1 = 15;
if($no1 > 0){
    echo "<br>No is +ve";
} else if($no1<0){
    echo "<br>No is -ve";
} else {
    echo "<br>No is zero";
}

?>