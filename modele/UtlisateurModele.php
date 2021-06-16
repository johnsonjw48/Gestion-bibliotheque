<?php 

include 'DB.php';

class UtilisateurModele extends DB{

	function inscription ($data){

    $sql = "INSERT INTO user VALUES(NULL, :nom, :prenom, :psoeudo, :mdp, :email)";


    $insert = $this->connect()->prepare($sql);

    $insert->execute([
      "nom"      => $data->getNom(),
      "prenom"   => $data->getPrenom(),
      "psoeudo"  => $data->getPseudo(),
      "mdp"      => $data->getMdp(),  
      "email"    => $data->getEmail(),
    ]);
    
	 }


  function connexion($data){
    $query = $this->executerRequete("SELECT * FROM user WHERE psoeudo = ?", [$data["psoeudo"]]);

    if($query->rowCount() != 0){
      $Utilisateur = $query->fetch();
      if( password_verify($data['mdp'], $Utilisateur['mdp']) ){
        $_SESSION['Utilisateur'] = $Utilisateur;
      }

    }
  }

}