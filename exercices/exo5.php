<?php 

$a = 2;
$b = 4;
$c = -2;

echo "$a x<sup>2</sup>+($b) x+($c) = 0 <br>";

$delta = $b*$b - (4*$a*$c);

if($delta == 0){
    $x0 = -$b/(2*$a);

    echo "S={$x0}";
}else if($delta < 0){
    echo "Pas de solution";
}else{
    $x1 = (-$b-sqrt($delta))/(2*$a);
    $x2 = (-$b+sqrt($delta))/(2*$a);

    $x1 = number_format($x1, 2, ",", " ");

    echo "S={".$x1." , ".$x2."}";

}

$prix = 10500.3456;

$prix = number_format($prix,2,",", " ");


echo "<br> prix = $prix FCFA";