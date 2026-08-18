<?php 
$chaine = "Ma chaine de caractères";

echo "Le nombre de caracteres est de : ".mb_strlen($chaine);
echo "<br>Le dernier caractere : ".$chaine[strlen($chaine) - 1];

echo "<br>".strtoupper($chaine);
echo "<br>".strtolower($chaine);
echo "<br>".ucfirst($chaine);
echo "<br>".ucwords($chaine);

$tel = "   785858485  ";

$tel = trim($tel);

if(str_starts_with($tel, "78")){
    echo "<br>Excellent";
}else{
    echo "<br>Non";
}

echo "<br>".substr($chaine, 3, 6);

echo "<br>".str_replace("M", "L", $chaine);

echo "<br>".strrev($chaine);