<?php

for($i=1900;$i<=2016;$i++){
    if($i%400==0){
        if($i%4 == 0){
            echo $i."<br>";

        }
    } else {
       // echo "It is not leap year";
    }
}



?>