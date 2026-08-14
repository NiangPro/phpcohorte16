<?php 

$a = 3;
$b = 7;

echo "Avant echange <br>";
echo "a=$a et b=$b <br>";

$c = $a;
$a =$b;
$b= $c;

echo "Apres echange <br>";
echo "a=$a et b=$b <br>";