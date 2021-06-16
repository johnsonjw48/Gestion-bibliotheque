<?php  

 $conn= new PDO(
      'mysql:host=localhost; dbname=article', 'root', 'root', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]
    );



$sql= "SELECT * FROM article";

$stmt= $conn->query($sql);




  
  // $sql2 = "INSERT INTO `article` (`article_id`, `titre`, `date_pub`, `Auteur`) VALUES (NULL, :titre, :date_pub, :Auteur)";

  //  $insert = $conn->prepare($sql2);

  // $insert->execute([
  //   "titre"     => $_POST["titre"],
  //   "date_pub" => $_POST["date_pub"],
  //   "Auteur"     => $_POST["Auteur"],
   
  // ]);


// if( !empty($_POST["Titre de l'article"])){
//   print_r($_POST);
// }


echo "<pre>";
print_r($_POST);
echo "</pre>";


?>




<center>

<h2>Ajouter un article</h2>

<div id="inscription">
  <center>
    <form action="home.php" method="post" id="formulaire">
      <div>
        <label for="">Titre de l'article</label>
        <input type="text" name="titre" placeholder="Votre titre" id="prenom">
      </div>
      <div>
        <label for="">Nom</label>
        <input type="text" name="Auteur" placeholder="Votre nom" class="form-control">
      </div>
      

      <div>
        <label for="">Date de publication</label>
        <input type="Date" name="date_pub" placeholder="Votre mail" class="form-control">
      <div>

      	<div>
        <label for="">Contenu</label>
        <input type="text" name="Contenu" placeholder="Votre article" id="message">
      <div>

        
      <br>
      <br>
      
<div id= "boutons">
 <button type="submit"   id= "sinscrire">Publier</button>


</center>


<center>
<h2>Récement publié</h2>
<table id="tableaux">
  
  <tr class= "entete_tableau">
    
<th>Titre</th>
<th>Auteur</th>
<th>Date</th>


  </tr>


<?php while ($publication=$stmt->fetch()) : ?>

<tr>

  <td> <?php echo $publication['titre']  ?>  </td>
  <td> <?php echo $publication['Auteur']?> </td>
  <td> <?php echo $publication['date_pub'] ?>     </td>
  
</tr>

<?php endwhile;  ?>


</table>

<center>
