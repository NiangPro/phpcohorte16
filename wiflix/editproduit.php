<?php 
    session_start();
    require_once("database.php");
    require_once("mesfonctions.php");
    $nom = "wiflix";
    $page = "Edit Produit";
    $date = date("Y");

    if(!estAdmin()){
        return header("Location: index.php");
    }

    if(isset($_POST["modifier"])){
        extract($_POST);
        $p = recupererUnProduit($_GET["id"]);

        if ($_FILES["image"]["size"] > 0) {
            $img = $_FILES["image"]["tmp_name"];
            $img_name = uniqid().".jpg";
            move_uploaded_file($img, "images/".$img_name);
        }else{
            $img_name = $p["image"];
        }

        if (modifierUnProduit($_GET["id"], $nom, $prix, $description, $img_name, $idcategorie)) {
            return header("Location: produits.php");
        }
    }

    $prod = recupererUnProduit($_GET["id"]);
    

    $categories = recupererToutesLesCategories();
    require("entete.php");

?>

    <div class="container col-md-6" style="margin-top: 70px; min-height:100vh;">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h2 class="col-md-10">Formulaire d'edition produit</h2>
                    <div class="col-md-2">
                        <a href="produits.php" class="btn btn-info">Retour</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="">Nom</label>
                        <input type="text" value="<?= $prod['nom'] ?>" class="form-control" name="nom" required>
                    </div>
                    <div>
                        <label for="">Prix</label>
                        <input type="number" min="0" value="<?= $prod['prix'] ?>" class="form-control" name="prix" required>
                    </div>
                    <div>
                        <label for="">Description</label>
                        <textarea  class="form-control" name="description" required><?= $prod['description'] ?></textarea>
                    </div>
                    <div>
                        <label for="">Categorie</label>
                        <select  class="form-control" name="idcategorie" required>
                            <option value="">Veuillez selectionner une categorie</option>
                            <?php foreach($categories as $c): ?>
                                <option value="<?= $c['id'] ?>" <?= $prod['idcategorie'] == $c['id'] ? "selected" : "" ?>><?=  $c['nom'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label for="">Image du produit</label>
                        <input type="file" class="form-control" name="image" >
                    </div>

                    <button type="submit" name="modifier" class="btn btn-success mt-3">Modifier</button>
                </form>
            </div>
        </div>
    </div>
    
<?php require_once("pied.php"); ?>
