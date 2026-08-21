<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <form action="traitement.php" method="post">
            <div>
                <label for="">Prenom</label>
                <input type="text" name="prenom" class="form-control" required>
            </div>
             <div>
                <label for="">Nom</label>
                <input type="text" name="nom" class="form-control" required>
            </div>
             <div>
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
             <div>
                <label for="">Mot de passe</label>
                <input type="password" name="mdp" class="form-control" required>
            </div>
            <button type="submit" name="register" class="btn btn-success mt-3">S'inscrire</button>
        </form>

        <?php 

            echo "<pre>";

            if(isset($_POST["register"])){
                extract($_POST);
                print_r($_POST);

                echo "<br> Prenom:".ucfirst($_POST["prenom"]);
                echo "<br> Nom:".$_POST["prenom"];
                echo "<br> Email:".$email;
            }else{
                echo "<div class='alert alert-info'>Veuillez renseigner le formulaire</div>";
            }
            echo "</pre>";
        ?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>