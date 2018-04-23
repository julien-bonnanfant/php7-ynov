# Projet ScoreBoard

L'objectif du projet est de réaliser un petit site de classement de parties. Le projet se réalise par binôme, chaque équipe choisit un jeu différent et tout les projets seront différents, mais avec des similitudes imposées.

L'idée du projet c'est de pouvoir garder un classement de parties "entre potes" (et pas un site global pour tout l'internet), il n'y a donc pas besoin de s'inscrire et créer un compte sur le site pour créer des parties.

## Spécifications à respecter

* Le projet doit être fait **en binôme**.
* Chaque projet doit être mis sur un repository github **indépendant** (pas sur votre repository qui contient les challenges), vous devez me fournir le dossier github.
* Chaque projet utilisera **une base de données MySQL** pour garder en mémoire les infos des joueurs et des parties jouées.
* Chaque projet **doit comporter** un fichier `.sql` qui contient la structure de la base de données et des données de test, je m'en servirait pour lancer vos projets.
* Chaque projet **doit comporter** un fichier `README.md` qui contient des informations sur le projet : quel est le jeu, quelles sont les pages, comment importer la base de données et **toute autre information spécifique** dont j'aurais besoin pour lancer le projet.
* **Faites un effort sur le code** : tout en anglais, les noms des variables en camelCase, des fonctions en camelCase, des classes en PascalCase, l'indentation, les conventions de code (voir plus bas les critères de notation).

## Mais vous êtes libres de :

* Organiser le site sur une seule page ou sur plusieurs pages, de faire autant de fichiers que vous voulez. Mais rappelez vous qu'un code est plus propre si chaque fichier est le plus petit possible.
* Utiliser ou non la programmation orientée objet.
* Utiliser bootstrap ou du HTML / CSS perso.

## Idées BONUS

Si vous voulez aller plus loin, voici quelques idées pour level up votre projet :

* La création de joueur ne peut qu'être faite par un admin, il faut donc un formulaire de connection, utiliser la session et avoir un utilisateur spécial "is_admin=1" en BDD. L'admin peut aussi supprimer des joueurs ou/et des parties.
* Encore mieux, tout joueur doit être inscrit au site avant de créer une partie.
* Pouvoir ajouter des commentaires à une partie (dans une table spéciale).
* Ajouter l'envoi de fichier d'avatar à la création du joueur.
* Trouver une idée pour utiliser une librairie externe avec composer.
* Respecter à 100% les conventions PSR-2.
* Héberger le projet sur internet (par exemple [heroku](https://www.heroku.com) est gratuit, [tutoriel heroku](https://scotch.io/@phalconVee/deploying-a-php-and-mysql-web-app-with-heroku))
* Mettre des tests automatisés dans le projet (phpunit, phpspec, Behat).
