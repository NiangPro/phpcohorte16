<?php 

 $emprunt = 500000;
 $taux = 8/100;


 $interet = $emprunt * $taux;

 $remboursement = $emprunt + $interet;
 $r_mensuel = $remboursement/12;

 echo "Emprunt = $emprunt FCFA <br>";
 echo "Taux = 8%  <br>";
 echo "Montant de l'interet = $interet FCFA <br>";
 echo "Montant total a rembourser = $remboursement FCFA <br>";
 echo "Remboursement Mensuel = $r_mensuel   FCFA <br>";