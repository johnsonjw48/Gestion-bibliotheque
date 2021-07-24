# Création d’une interface web dynamique pour la gestion d'une bibliothèque

J'ai développé un site web de gestion d'une bibliothèque en PHP et avec une base de données MySQL. Elle  fournit une interface frontend et une interface backend.

### Fonctionnalités : 

On y retrouve tous les éléments d'un CRUD :

* Create : Publié un article
* Read :  Sur la page d’accueil sont lister les cinq derniers articles publiés
* Update : Mettre à jour un article
* Delete : Supprimer un article


### Conception : 
Ce projet est fait en programmation orientée objet et avec l'architecture MVC (Modèle, Vue Contrôleur).



### Technologies utilisées : 

##### Front end:  

* HTML
* CSS
* JavaScript
* jQuerry

##### Back end: 

* PHP
* MySQL


La validation des formulaires (inscription et connexion) côté client est  faite en JavaScript. Pour la sauvegarde des membres, je me suis protégé des failles XSS et injection SQL par hachage de mot de passe. Si un membre est connecté, son prénom et son nom sont sur le header durant toute la navigation. Il pourra également créer des articles.

Sur  la page d’accueil sont lister les cinq derniers articles publiés. Pour chaque article on a le titre et l’auteur.



### Comment lancer le projet? 

Accéder au dossier dans lequel les fichiers ont été stocké via votre navigateur web en passant par vos serveurs.
