 <div id="inscription">
  <center>
    <h2>Inscription</h2>
    <form action="index.php" method="post" id="formulaire">
      <div>
        <label for="">Prénom</label>
        <input type="text" name="prenom" placeholder="Votre prénom" id="prenom">
      </div>
      <div>
        <label for="">Nom</label>
        <input type="text" name="nom" placeholder="Votre nom" id="nom">
      </div>
      <div>
        <label for="">Login</label>
        <input type="text" name="pseudo" placeholder="Votre login" class="form-control">
      </div>
      <div>
        <label for="">Mot de passe</label>
        <input type="password" name="mdp" placeholder="Votre password" class="form-control">
      </div>
      <div>
        <label for="">Mail</label>
        <input type="text" name="email" placeholder="Votre mail" class="form-control">
      <div>
  
      <br>

    <span id=error> </span>  
    <br>
    <br>
      
<div id= "boutons">
 <button type="submit"   id= "sinscrire">S'inscrire</button> <!-- &emsp; &emsp; &emsp; &emsp; -->
<!-- <button type="submit" id="annuler">Annuler</button> -->
 
</div>
      
    </form>
    </center>
  </div>



<script src="view/Validation.js"></script>