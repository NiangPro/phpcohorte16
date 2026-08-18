<?php 

echo "Page traitement";
echo "<pre>";

            if(isset($_POST["register"])){
                extract($_POST);
                print_r($_POST);

                echo "<br> Prenom:".ucfirst($_POST["prenom"]);
                echo "<br> Nom:".$_POST["prenom"];
                echo "<br> Email:".$email;
            }else{
                echo "<div class='alert alert-info'>Veuillez renseigner le formulaire</div>";
            }
            echo "</pre>";