<?php
    echo "Hi hello<br>";
    $a=10;
    $b=20;
    $c = $a+$b;
    echo "<b>Addition is ".$c."</b>";
    //% modulus oerator 
    //arithmetic operators - +,-,*,/,%
    $c = 27%4;
    echo "<br><b>modulus is ".$c."</b>";
    //++ increment,-- decrement 
    echo "<br>Before a is ".$a;

    $b = $a++; //postfix
    echo "<br>a is ".$a;
    echo "<br>b is ".$b;
    $b = ++$a; //prefix
    echo "<br>a is ".$a;
    echo "<br>b is ".$b."<br>";

    //arithmetic operators - +,-,*,/,%,**
//Assignment operators = +=,-=,*=,/=,%=,**=
$a +=5;
    //&&,||,! -- Logical operators
    //<,>,<=,>=,==,!= Relational/conditional ,===
   $str = 350;
   $str2 = 35;
   echo "<br>a  > b is ";
   var_dump($str>$str2);
   echo "<br>a  >= b is ";
   var_dump($str>=$str2);
   echo "<br>a  == b is "; //check only value
   var_dump($str==$str2);
   echo "<br>a  === b is "; //check value & its datatype
   var_dump($str===$str2);
   echo "<br>a  != b is ";
   var_dump($str!=$str2);

   $str = 350;
   echo "<br>Exponent is ".($str**3)."<br>";
   //ternary oper = ?:
   echo ($str>$str2)?"str is maximum":"str2 is maximum";
   //(condition)?true block:false block



?>