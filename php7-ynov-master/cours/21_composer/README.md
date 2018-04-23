# Composer

Composer est le gestionnaire de paquets pour PHP, il a deux utilisations principale :

* Pouvoir récupérer du code créer par d'autre developpeurs et l'utiliser dans nos projets/
* "autoloader" les classes PHP d'un projet pour ne plus avoir besoin de `require_once` chaque fichier qui contient une classe quand on en a besoin

Composer utilise git pour télécharger du code depuis github et le mettre dans votre projet.

## Installer Composer

La marche à suivre est disponible sur le [site de composer](https://getcomposer.org/download/).

## Trouver des paquets sur packagist

[Packagist](https://packagist.org/) est le site qui répertorie tout les paquets disponibles dans composer. Chaque paquet est aussi disponible sur github.

## Utiliser composer dans votre projet

Pour que composer soit utilisable dans votre projet, il faut obligatoirement avoir un fichier de configuration `composer.json` dans chacun de vos projets qui veut l'utiliser

```json
{
    "name": "composer-test",
    "description": "Test de composer",
    "type": "project",
    "authors": [
        {
            "name": "tentacode",
            "email": "contact@gabrielpillet.com"
        }
    ],
    
    "autoload": {
        "psr-4": {
            "": "src/"
        }
    },

    "require": {
        "guzzlehttp/guzzle": "^6.3"
    }
}
```

Il contient la configuration de l'autoload pour votre projet, ainsi que la liste des dépendances de votre projet dans `require`.

Vous pouvez générer le fichier `composer.json` en tapant `composer init` dans le répertoire de votre projet.

## Installer un paquet

Pour installer une dépendance, on utilise `composer require`, par exemple `composer require guzzlehttp/guzzle` va ajouter le paquet guzzle au composer.json et aussi télécharger le code dans le dossier `vendor` de votre projet.

Ce dossier `vendor` contient toutes les dépendances de votre projet. C'est du code que vous ne voulez pas voir sur github donc mettez `vendor` dans un fichier `.gitignore` pour qu'il ne soit pas envoyé sur github.

## Supprimer un paquet

`composer remove guzzlehttp/guzzle` supprimera le paquet de votre composer.json et de votre dossier vendor.

## Mettre à jour un paquet

`composer update` va mettre à jour tout vos paquets pour correspondre à la dernière version disponible. On peut aussi mettre à jour un paquet en particulier : `composer update guzzlehttp/guzzle`.

## L'autoloading

Pour faire marcher l'autoload dans votre projet, il faut ajouter à votre composer.json :

```json
"autoload": {
    "psr-4": {
        "": "src/"
    }
},
```

Il faut aussi relancer un `composer install` pour que le changement soit pris en compte ou un `composer dump-autoload`.

Pour que les classes de votre projet soient correctement autoloadée, il faut aussi rajouter en haut de votre script php :

```php
require 'vendor/autoload.php';
```


Et que votre arborescence respecte ces conditions :

* tout le code PHP doit être dans des sous-dossier de `/src`
* il faut qu'il y ait une seule classe par fichier php
* il faut que le nom de la classe soit identique au fichier php
* il faut que le namespace de la classe corresponde à l'arborescence du fichier dans `/src`

Voir l'exemple dans `21_composer` pour comprendre comment ces conditions sont remplient.
