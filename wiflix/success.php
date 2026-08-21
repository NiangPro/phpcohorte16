<?php 
      $nom = "wiflix";
    $page = "Confirmation";
    $date = date("Y");
    require_once("entete.php");
?>

<div class="container " style="margin-top: 75px; min-height: 100vh;">
    <div class="alert alert-success">Votre message a ete bien pris en compte !</div>

    Nom complet : <?=  $_GET["nomc"] ?> <br>
    Email : <?=  $_GET["email"] ?> <br>
    contenu : <?=  $_GET["contenu"] ?> <br>
</div>

<?php require_once("pied.php");