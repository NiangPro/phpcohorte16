<?php 
    session_start();
    require_once("database.php");
    require_once("mesfonctions.php");
    $nom = "wiflix";
    $page = "Ajout Produit";
    $date = date("Y");

    if(!estAdmin()){
        return header("Location: index.php");
    }

    if(isset($_POST["ajouter"])){
        extract($_POST);
        
        if ($_FILES["image"]["size"] > 0) {
            $img = $_FILES["image"]["tmp_name"];
            // $img_name = $_FILES["image"]["name"];
            $img_name = uniqid().".jpg";
            if (ajouterUnProduit($nom, $prix, $description, $img_name, $idcategorie)) {
                move_uploaded_file($img, "images/".$img_name);

                return header("Location: produits.php");
            }
        }
    }
 

    $categories = recupererToutesLesCategories();
    require("entete.php");

?>

    <div class="container col-md-6" style="margin-top: 70px; min-height:100vh;">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h2 class="col-md-10">Formulaire d'ajout produit</h2>
                    <div class="col-md-2">
                        <a href="produits.php" class="btn btn-info">Retour</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="">Nom</label>
                        <input type="text" class="form-control" name="nom" required>
                    </div>
                    <div>
                        <label for="">Prix</label>
                        <input type="number" min="0" class="form-control" name="prix" required>
                    </div>
                    <div>
                        <label for="">Description</label>
                        <textarea  class="form-control" name="description" required></textarea>
                    </div>
                    <div>
                        <label for="">Categorie</label>
                        <select  class="form-control" name="idcategorie" required>
                            <option value="">Veuillez selectionner une categorie</option>
                            <?php foreach($categories as $c): ?>
                                <option value="<?= $c['id'] ?>"><?=  $c['nom'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label for="">Image du produit</label>
                        <input type="file" class="form-control" name="image" >
                    </div>

                    <button type="submit" name="ajouter" class="btn btn-success mt-3">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
    
<?php require_once("pied.php"); ?>
