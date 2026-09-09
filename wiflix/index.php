<?php 
    session_start();

    require_once("database.php");
    $nom = "wiflix";
    $page = "Accueil";
    $date = date("Y");

    $produits = recupererTousLesProduits();
    include("entete.php");
?>


    <div class="container" style="margin-top: 70px;min-height: 100vh;">
        <div class="row">
            <?php foreach($produits as $p): ?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="images/<?= $p['image'] ?>" height="150" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $p['nom'] ?></h5>
                        <p class="card-text"><?= substr($p["description"], 0, 10) ?> ...</p>
                        <a href="#" class="btn btn-warning rounded-circle"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
   

    <?php require_once("pied.php"); ?>