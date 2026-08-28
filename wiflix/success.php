<?php 
    session_start();
      $nom = "wiflix";
    $page = "Confirmation";
    $date = date("Y");
    require_once("entete.php");
?>

<div class="container " style="margin-top: 75px; min-height: 100vh;">
    <div class="alert alert-success">Votre message a ete bien pris en compte !</div>

    <!-- Nom complet : <?php  // echo $_GET["nomc"]; ?> <br>
    Email : <?php  //echo $_GET["email"]; ?> <br>
    contenu : <?php  //echo $_GET["contenu"]; ?> <br> -->

     Nom complet : <?=  $_SESSION["nom"] ?> <br>
    Email : <?=  $_SESSION["email"] ?> <br>
    contenu : <?=  $_SESSION["contenu"] ?> <br>
</div>

<?php require_once("pied.php");