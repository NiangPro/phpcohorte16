<?php 
    session_start();
    $nom = "wiflix";
    $page = "Profil";
    $date = date("Y");

    require("entete.php");

 
?>

    <div class="container  mt-5">
        <h1>Page d'<?= $page ?></h1>
       
    </div>
    
<?php require_once("pied.php"); ?>
