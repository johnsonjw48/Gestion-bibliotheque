<?php

include "view/header.php";

include "Classes/Utilisateur.classes.php";

include"Classes/Article.class.php";

include "modele/UtlisateurModele.php";

include "controller/UtilisateurController.php";


$UtilisateurController = new UtilisateurController();




if( isset($_GET['action']) ){
  $action = $_GET['action'];

  switch ( $action ) {
    case 'inscription':
      include "view/Inscription.php";
      break;
    case 'connexion':
      include "view/Connexion.php";
      break;
    case 'contacts':
     include "view/contacts.php";
     break;
    default:
      echo "page 404";
      break;
  }
}else {
  include 'view/home.php';
}


if( !empty($_POST["prenom"]) ){

   $m = new Utilisateur($_POST);

   // var_dump($m);
  $UtilisateurController->inscription($m);
  
}

if( !empty($_POST['psoeudo']) && isset($_POST['connexion']) ){
  $UtilisateurController->connexion($_POST);
}



include "view/footer.php";