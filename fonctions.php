<?php 
 
 function direBonjour(){
    echo "Bonjour <br>";
 }

 function direBonjourA($prenom){
    echo "Bonjour $prenom <br>";
 }

 function somme($a, $b){
    echo "$a + $b = ".($a+$b)."<br>";
 }


 direBonjour();

 $p = "Moussa";
 direBonjourA("Fatou");
 direBonjourA($p);

 somme(5, 15);
 somme(15, 45);