<?php
$no = 1457; //count no of digits
$count = 0;
while($no>0){ //145>0  14>0 1>0 0>0
    $r = $no%10; //1457%10 = 7 145%10 = 5 14%10=4 1%10= 1
    $no = floor($no/10); //1457/10 = 145.7=145 145/10 = 14.5 = 14 14/10 = 1.4=1 1/10=0.1=0
    $count++; //1 2 3 4
}

echo "No of Digits are ".$count;

?>