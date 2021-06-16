<?php



class UtilisateurController{

  function inscription($data){

     $modele = new UtilisateurModele();
     $modele->inscription($data);

  }

   function connexion($param){
    $this->modele->connexion($param);
    header("location: .");
  }

}
