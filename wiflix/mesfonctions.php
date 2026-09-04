<?php 

function estAdmin(){
    if(isset($_SESSION["user"]) && $_SESSION["user"]["role"] == "admin"){

        return true;
    }else{

        return false;
    }

    // return isset($_SESSION["user"]) && $_SESSION["user"]["role"] == "admin" ? true : false;
}

function estConnecte(){
     return isset($_SESSION["user"]) ? true : false;
}