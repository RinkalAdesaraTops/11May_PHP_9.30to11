<?php

$a = 10;
$b = 35;
$c = 45;
 $ans = (($a>$b)?(($a>$c)?$a:$c):(($b>$c)?$b:$c));
 echo "Max is ".$ans;
// if($a>$b){
//     if($a > $c){
//         echo "A is max";
//     } else {
//         echo "C is max";
//     }
// } else {
//     if($b>$c){
//         echo "B is max";
//     } else {
//         echo "C is max";
//     }
// }

?>