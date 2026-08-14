<?php 

for($i = 1; $i <= 10; $i++){
    if ($i%2==0) {
        echo "Bonjour $i - ";
    }
}

echo "<br>";

$n = 5;

echo "La table de multiplication  de $n est : <br>";

for ($i=1; $i <=10 ; $i++) { 
    $prod = $n*$i;
    echo "$n x $i = $prod <br>";
}