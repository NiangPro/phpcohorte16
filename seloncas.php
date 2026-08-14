<?php 

$choix = 1;


echo "
        MENU DU JOUR <br>
        1- Thiebou djeun <br>
        2- Maffe <br>
        3- Yassa <br> 
        4- C'Bon <br>
        Faites votre choix: $choix <br>

";

switch($choix){
    case 1: 
        echo "Vous avez choisi: THiebou djeun";
        break;
    case 2: 
        echo "Vous avez choisi: Mafee";
        break;
    default: 
        echo "Plat indisponible";
        break;
}