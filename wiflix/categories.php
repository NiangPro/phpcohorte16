<?php 
    session_start();
    require_once("database.php");
    require_once("mesfonctions.php");
    $nom = "wiflix";
    $page = "Categorie";
    $date = date("Y");

    if(!estAdmin()){
        return header("Location: index.php");
    }

    if(isset($_GET["id"])){
        supprimerUneCategorie($_GET["id"]);
        return header("location: categories.php");
    }
    $categories = recupererToutesLesCategories();

    require("entete.php");

?>

    <div class="container col-md-6" style="margin-top: 70px;">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h2 class="col-md-10">Liste des categories</h2>
                    <div class="col-md-2">
                        <a href="ajoutcategorie.php" class="btn btn-info">Ajouter</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($categories as $c): ?>
                        <tr>
                            <td><?= $c["nom"] ?> </td>
                            <td>
                                <a href="" class="btn btn-warning rounded-circle"><i class="fa fa-edit"></i></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $c['id'] ?>" class="btn btn-danger rounded-circle"><i class="fa fa-trash"></i></a>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?= $c['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Suppression</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Êtes-vous sûr de vouloirs supprimer la catégorie: <?= $c["nom"] ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                                            <a href="?id=<?= $c['id'] ?>" class="btn btn-primary">Oui</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
<?php require_once("pied.php"); ?>
