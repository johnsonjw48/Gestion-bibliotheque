<?php

class Article{

 private $id;
 private $titre;
 private $date;
 private $auteur;
 



 
function __construct(array $donnees){
    //var_dump($data);
 

   $this->setTitre($donnees['Titre']);
   $this->setDate($donnees['Date']);
   $this->setAuteur($donnees['Auteur']);
  
     
 //     $this->nom = $nom;
 //     $this->email = $mail;
 //     $this->pseudo = $pseudo;
 //     $this->mdp = $mdp;
 //     $this->civilite = $c;
 //     $this->statut = "user";
 //     $this->date_enregistrement = date("Y-m-d H:i:s");
  }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $prenom
     */
    public function setTitre($titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param mixed $nom
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param mixed $email
     */
    public function setAuteur($auteur): void
    {
        $this->auteur = $auteur;
    }

   
    


}