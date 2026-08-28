<?php 

function tableDeMultiplication($n){
    echo "<br>La table de multiplication de $n est : <br>";
    for($i=1; $i<=10; $i++){
        echo "$n x $i = ".($n*$i)."<br>";
    }
}

tableDeMultiplication(5);
tableDeMultiplication(9);
tableDeMultiplication(2);