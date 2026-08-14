<?php 

$age = 9;


// if($age >= 6 && $age<=7){
//     echo "poussin";
// }else if($age >= 8 && $age <=9){
//     echo "pupille";
// }

if($age == 6 || $age == 7){
    echo "poussin";
}else  if($age == 8 || $age ==9){
    echo "pupille";
}else  if($age == 10 || $age ==11){
    echo "minime";
}else if($age > 12){
    echo "Cadet";
}else{
    echo "categorien non prise en charge";
}