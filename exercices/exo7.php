<?php
$fruits = ["Pomme", "Banane", "Orange", "Mangue", "Ananas"];

echo "Premier fruit: ".$fruits[0];
echo "<br>Troisieme fruit: ".$fruits[2];

echo "<br> La liste des fruits: <br>";
for($i=0; $i < count($fruits); $i++){
    echo $fruits[$i]."<br>";
}

echo "Le nombre total de fruits est de ".count($fruits);
