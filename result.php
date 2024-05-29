<?php
$m1 = 45;
$m2 = 65;
$m3 = 75;
$total = $m1+$m2+$m3;
echo "<br>Total is ".$total;
$per = $total/3;
echo "<br>Percentage is ".$per;
/* 80 up - A+
70-80 A
60-70 B
50-60 C
40-50 pass 
<40 -- fail*/
if($per>=80){
    echo "<br>Grade is A+";
} else if($per>=70 && $per<80){
    echo "<br>Grade is A";
}else if($per>=60 && $per<70){
    echo "<br>Grade is B";
}else if($per>=50 && $per<60){
    echo "<br>Grade is C";
}else if($per>=40 && $per<50){
    echo "<br>Grade is Pass";
} else {
    echo "<br>You are Fail";
}


?>