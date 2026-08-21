<?php 

 $nom = "wiflix";
    $page = "Contact";
    $date = date("Y");

    if (isset($_POST["send"])) {
        extract($_POST);

        return header("Location: success.php?nomc=$nomc&email=$email&contenu=$msg" );
    }
require_once("entete.php");

?>

<div class="container col-md-8 mt-5 py-4">
    <div class="card mt-3">
        <div class="card-header bg-warning">
            <h1 class="text-center">Contact</h1>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div>
                    <label for="">Nom complet</label>
                    <input type="text" name="nomc" required class="form-control">
                </div>
                 <div>
                    <label for="">Email</label>
                    <input type="email" name="email" required class="form-control">
                </div>
                 <div>
                    <label for="">Message</label>
                    <textarea  name="msg" required class="form-control"></textarea>
                </div>
                <button type="submit" name="send" class="btn btn-success mt-3">Envoyer</button>
            </form>
        </div>
    </div>
</div>

 <?php require_once("pied.php"); ?>
