<?php 

try{

    $db = new PDO("mysql:host=localhost;dbname=wiflix", "root", "");
}catch(PDOException $e){
    die("Erreur: ".$e->getMessage()." a la ligne ".__LINE__);
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