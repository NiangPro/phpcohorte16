<?php 
    session_start();
    require_once("database.php");
    $nom = "wiflix";
    $page = "Categorie";
    $date = date("Y");

    $categories = recupererToutesLesCategories();

    require("entete.php");

?>

    <div class="container col-md-6" style="margin-top: 70px;">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h2 class="col-md-10">Liste des categories</h2>
                    <div class="col-md-2">
                        <a href="" class="btn btn-info">Ajouter</a>
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
                                <a href="" class="btn btn-danger rounded-circle"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
<?php require_once("pied.php"); ?>
