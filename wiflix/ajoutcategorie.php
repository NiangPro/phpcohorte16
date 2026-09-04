<?php 
    session_start();
    require_once("database.php");
    require_once("mesfonctions.php");
    $nom = "wiflix";
    $page = "Ajout Categorie";
    $date = date("Y");

    if(!estAdmin()){
        return header("Location: index.php");
    }

    if(isset($_POST["ajouter"])){
        extract($_POST);

        if (ajouterUneCategorie($nom)) {
            return header("Location: categories.php");
        }
    }
 

    require("entete.php");

?>

    <div class="container col-md-6" style="margin-top: 70px; min-height:100vh;">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h2 class="col-md-10">Formulaire d'ajout categorie</h2>
                    <div class="col-md-2">
                        <a href="categories.php" class="btn btn-info">Retour</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div>
                        <label for="">Nom</label>
                        <input type="text" class="form-control" name="nom" required>
                    </div>

                    <button type="submit" name="ajouter" class="btn btn-success mt-3">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
    
<?php require_once("pied.php"); ?>
