<?php 

try{

    $db = new PDO("mysql:host=localhost;dbname=wiflix", "root", "");
}catch(PDOException $e){
    die("Erreur: ".$e->getMessage()." a la ligne ".__LINE__);
}

function modifierUnProduit($id, $nom, $prix, $description, $image, $idcategorie){
    global $db;
    try {
        $q = $db->prepare("UPDATE produits 
        SET nom =:nom, prix =:prix, description =:description, image =:image, idcategorie =:idcategorie
        WHERE id=:id");
        return $q->execute([
            "nom" => $nom,
            "prix" => $prix,
            "description" => $description,
            "image" => $image,
            "idcategorie" => $idcategorie,
            "id" => $id
        ]);
    }catch(PDOException $e){
        die("Erreur: ".$e->getMessage()." a la ligne ".__LINE__);
    }
}

function recupererUnProduit($id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM produits WHERE id=:id");
        $q->execute(["id" => $id]);

        return $q->fetch();
    }catch(PDOException $e){
        die("Erreur: ".$e->getMessage()." a la ligne ".__LINE__);
    }
}

function recupererTousLesProduits(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM produits ORDER BY id DESC");
        $q->execute();

        return $q->fetchAll();
    } catch(PDOException $e){
        die("Erreur: ".$e->getMessage()." a la ligne ".__LINE__);
    }
}
function ajouterUnProduit($nom, $prix, $description, $image, $idcategorie){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO produits VALUES(NULL, :nom, :prix, :description, :image, :idcategorie)");
        return $q->execute([
            "nom" => $nom,
            "prix" => $prix,
            "description" => $description,
            "image" => $image,
            "idcategorie" => $idcategorie
        ]);
    } catch(PDOException $e){
        die("Erreur: ".$e->getMessage()." a la ligne ".__LINE__);
    }
}

function supprimerUneCategorie($id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM categories WHERE id=:id");
        return $q->execute(["id" => $id]);
    } catch(PDOException $e){
        die("Erreur: ".$e->getMessage()." a la ligne ".__LINE__);
    }
}

function ajouterUneCategorie($nom){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO categories VALUES(NULL, :nom)");
        return $q->execute([
            "nom" => $nom
        ]);
    } catch(PDOException $e){
        die("Erreur: ".$e->getMessage()." a la ligne ".__LINE__);
    }
}

function recupererToutesLesCategories(){
    global $db;
    try {
        $q  = $db->prepare("SELECT * FROM categories ORDER BY id DESC");
        $q->execute();

        return $q->fetchAll();
    }catch(PDOException $e){
        die("Erreur: ".$e->getMessage()." a la ligne ".__LINE__);
    }
}

function seconnecter($email){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM users WHERE email=:email");
        $q->execute([
            "email" =>$email
        ]);

        return $q->fetch();
    }catch(PDOException $e){
        die("Erreur: ".$e->getMessage()." a la ligne ".__LINE__);
    }
}


function inscrire($prenom, $nom, $email, $mdp, $role= "client"){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO users VALUES(NULL, :prenom, :nom, :email, :mdp, :role)");
        return $q->execute([
            "prenom" => $prenom,
            "nom" => $nom,
            "email" => $email,
            "mdp" => $mdp,
            "role" => $role
        ]);
    } catch(PDOException $e){
        die("Erreur: ".$e->getMessage()." a la ligne ".__LINE__);
    }
}

// die("Connexion");
// try{
//     echo 5/0;

//     echo 5/4;
// }catch(DivisionByZeroError $e){
//     die("Erreur: ".$e->getMessage()) ;
// }