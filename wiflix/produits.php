<?php 
    session_start();
    require_once("database.php");
    require_once("mesfonctions.php");
    $nom = "wiflix";
    $page = "Produits";
    $date = date("Y");

    if(!estAdmin()){
        return header("Location: index.php");
    }

    $produits = recupererTousLesProduits();
    require("entete.php");

?>

    <div class="container col-md-10" style="margin-top: 70px;">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h2 class="col-md-10">Liste des produits</h2>
                    <div class="col-md-2 text-end">
                        <a href="ajoutproduit.php" class="btn btn-warning">Ajouter</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Description</th>
                            <th>Categorie</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach($produits as $p): ?>
                            <tr>
                                <td>
                                    <img src="images/<?= $p['image'] ?>" width="100" height="75" alt="">
                                </td>
                                <td><?= $p['nom'] ?></td>
                                <td><?= number_format($p['prix'], 0, ",", " ")  ?> FCFA</td>
                                <td><?= $p['description'] ?></td>
                                <td><?= $p['idcategorie'] ?></td>
                                <td>
                                    <a href="editproduit.php?id=<?= $p['id'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                       <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
<?php require_once("pied.php"); ?>
