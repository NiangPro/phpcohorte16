<?php 
$nom = "wiflix";
    $page = "Inscription";
    $date = date("Y");

    require_once("database.php");

    if(isset($_POST["inscription"])){
        extract($_POST);
        $mdp = password_hash($mdp, PASSWORD_DEFAULT, ["cost" => 12]);
        if(inscrire($prenom, $nom, $email, $mdp)){
            return header("Location: connexion.php");
        }

    }
require_once("entete.php"); 

?>


<div class="container col-md-4" style="padding-top: 155px; min-height: 100vh;">
    <div class="card">
        <div class="card-header text-center bg-warning">
            <h3>Inscription</h3>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div>
                    <label for="">Prenom</label>
                    <input type="text" name="prenom" required class="form-control">
                </div>
                <div>
                    <label for="">Nom</label>
                    <input type="text" name="nom" required class="form-control">
                </div>
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email" required class="form-control">
                </div>
                <div>
                    <label for="">Mot de passe</label>
                    <input type="password" name="mdp" required class="form-control">
                </div>
                <button type="submit" name="inscription" class="btn btn-success mt-3">S'inscrire</button>
            </form>
        </div>
    </div>
</div>


<?php require_once("pied.php"); ?>