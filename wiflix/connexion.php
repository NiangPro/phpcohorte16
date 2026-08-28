<?php 
$nom = "wiflix";
    $page = "Connexion";
    $date = date("Y");
require_once("entete.php"); 

?>


<div class="container col-md-4" style="padding-top: 155px; min-height: 100vh;">
    <div class="card">
        <div class="card-header text-center bg-warning">
            <h3>Connexion</h3>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email" required class="form-control">
                </div>
                <div>
                    <label for="">Mot de passe</label>
                    <input type="password" name="mdp" required class="form-control">
                </div>
                <button type="submit" name="connexion" class="btn btn-success mt-3">Se connecter</button>
            </form>
        </div>
    </div>
</div>


<?php require_once("pied.php"); ?>