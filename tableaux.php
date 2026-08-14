<?php 
echo "<pre>";
    $tabvide = [];
    $tab = ["Moussa", 45, "penda", true, "Abdou"];

    $entiers = array(23, -45, 9, 120, -34,1);

    $tab[] = "Nouvelle valeur";
    array_push($tab, "Aminata");

    array_unshift($tab, 123);

    array_shift($tab);
    array_pop($tab);

    array_splice($tab, 1, 0, "Alioune");

    array_splice($tab, 4, 1, 100);

    array_splice($tab, 6, 1);

    echo "Premiere valeur =".$tab[0];

    echo "<br>Nombre d'elements: ".count($tab);
    echo "<br>Dernier element : ".$tab[count($tab) - 1];

    print_r($tab);

    sort($entiers);
    rsort($entiers);
    print_r($entiers);


    for($i = 0; $i < count($tab); $i++){
        echo $tab[$i]."-";
    }

    echo "
    <table border=''>
        <tr>";
            for($i = 0; $i < count($tab); $i++){
                    echo "<td>".$tab[$i]."</td>";
                }
       echo "</tr>
    </table>   
    ";

    $matrice = [
        ["ba", 34, true, 50],
        ["vert", "gris", "react", "MDB"]
    ];

    for($i=0;$i < count($matrice); $i++){
        for($j=0; $j< count($matrice[$i]); $j++){
            echo $matrice[$i][$j]." - ";
        }
        echo "<br>";
    }
    // echo $matrice[1][2];

echo "</pre>";
