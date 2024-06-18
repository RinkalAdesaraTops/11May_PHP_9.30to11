<!-- //Switch case -->
<?php 
 $a=35;
 $b=25;
 $ch='y';
 /*
 1.addition 
 2.minus
 3.multiplication
 4.division
 */
switch($ch){
    case 1:
        echo "Addition is ".($a+$b);
        break;
    case 2:
        echo "Minus is ".($a-$b);
        break;
    case 3:
        echo "Multiply is ".($a*$b);
        break;
    case 4:
        echo "Division is ".($a/$b);
        break;
    default:
        echo "Invalid Choice";
}




?>