<?php
//Reverse no  251 = 152 151=151 Palindrom no 
$n = 243;
$f = $n;
$rev =0;
while($n>0){ //1>0
    $r = $n%10; //152%10 = 2 15%10=5 1%10=1
    $rev = ($rev*10)+$r; // = (0*10)+2 = 0+2 = 2 (2*10)+5=25 25*10+1=251
    $n = floor($n/10); //152/10=15.2=15 //15/10=1.5=1 1/10= 0.1=0
}
echo "Reverse no is ".$rev;
if($rev == $f){
    echo "<br>It is palindrom no";
} else {
    echo "<br>It is not palindrom no";
}
?>