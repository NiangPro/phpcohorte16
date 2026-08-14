<?php

$nbre_heures = 400;
$cout_connexion_par_heure = 500;
$cout_par_impression = 50;
$nbre_impression = 115000;

$estEtudiant = true;

$taux_reduction = 10/100;
$ptaxe = 5/100;

$montant_reduction = 0;

$montant_taxe = 0;

$cout_connexion = $nbre_heures * $cout_connexion_par_heure;
$cout_impression = $nbre_impression * $cout_par_impression;

$montant_total = $cout_connexion + $cout_impression;

if($estEtudiant){
    $montant_reduction = $montant_total *$taux_reduction;


    }
    if($montant_reduction > 5000){
        $montant_taxe = $montant_total * $ptaxe;
    }

    $montant_total = $montant_total - $montant_reduction +  $montant_taxe;


echo "La facture <br>

    Cout de la connexion: $cout_connexion <br>
    Cout des impressions: $cout_impression <br>
    Reduction obtenue: $montant_reduction <br>
    Taxe appliquee: $montant_taxe <br>
    Montant Final a payer: $montant_total <br>
    Est etudiant: $estEtudiant

";




