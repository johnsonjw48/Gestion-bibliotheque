<?php

class Utilisateur{

 private $id;
 private $prenom;
 private $nom;
 private $email;
 private $pseudo;
 private $mdp;



 
function __construct(array $data){
    //var_dump($data);
 

   $this->setPrenom($data['prenom']);
   $this->setNom($data['nom']);
   $this->setEmail($data['email']);
   $this->setPseudo($data['pseudo']);
   $this->setMdp($data['mdp']);

   
     
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
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp): void
    {
        $this->mdp = $mdp;
    }

    


}
