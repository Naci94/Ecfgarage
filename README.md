# Garage Automobile de Vincent Parrot

Bienvenue dans la documentation complète du projet pour le site web du Garage Automobile de Vincent Parrot. Cette documentation détaille chaque aspect du développement, de l'installation initiale à la personnalisation en passant par les fonctionnalités principales. Que vous soyez un développeur, un administrateur système ou simplement curieux, ce guide vous aidera à comprendre et à travailler sur ce projet.

## Table des Matières

1. [Introduction](#introduction)
2. [Installation](#installation)
   - [Clonage du Dépôt](#clonage-du-dépôt)
   - [Configuration du Serveur](#configuration-du-serveur)
   - [Base de Données](#base-de-données)
   - [Personnalisation](#personnalisation)
3. [Configuration](#configuration)
   - [Horaires d'Ouverture](#horaires-douverture)
   - [Ajout de Véhicules](#ajout-de-véhicules)
4. [Structure du Projet](#structure-du-projet)
5. [Fonctionnalités Principales](#fonctionnalités-principales)
   - [Page d'Accueil Publique](#page-daccueil-publique)
   - [Page de Présentation des Services](#page-de-présentation-des-services)
   - [Page d'Affichage des Véhicules d'Occasion](#page-daffichage-des-véhicules-doccasion)
   - [Page de Contact](#page-de-contact)
   - [Page des Témoignages Clients](#page-des-témoignages-clients)
   - [Interface d'Administration](#interface-dadministration)
6. [Personnalisation](#personnalisation)
7. [Contributions](#contributions)
8. [Licence](#licence)

## Introduction

Le site web du Garage Automobile de Vincent Parrot a été développé pour promouvoir les services du garage, afficher les véhicules d'occasion à vendre et permettre aux clients de contacter l'atelier. Le site est conçu pour être convivial et informatif, à la fois pour les visiteurs et pour l'administration.

## Installation

### Clonage du Dépôt

Pour déployer le site sur votre propre serveur, suivez ces étapes :

1. Clonez ce dépôt Git sur votre serveur :

   ```
   git clone https://github.com/utilisateurGit/garage-vincent-parrot.git
   ```

### Configuration du Serveur

2. Assurez-vous que vous avez PHP 8.2 installé sur votre serveur.

3. Configurez un serveur web (comme Apache) pour servir le contenu du dossier `public` du projet.

### Base de Données

4. Assurez-vous que l'extension PHP PDO est activée.

5. Créez une base de données MariaDB (version 10.11) pour le projet et importez le fichier SQL `database.sql` fourni dans le dossier `database`.

### Personnalisation

6. Modifiez le fichier `includes/db.php` pour spécifier les informations de connexion à votre base de données.

7. Le site devrait maintenant être accessible à partir de votre navigateur à l'adresse de votre serveur.

## Configuration

- Pour configurer les horaires d'ouverture du garage, connectez-vous à l'interface d'administration à l'adresse `/admin` (utilisez les identifiants de l'administrateur).

- Pour ajouter de nouveaux véhicules d'occasion à vendre, connectez-vous en tant qu'employé à l'adresse `/login` et accédez à l'interface d'ajout de véhicules.

## Structure du Projet

Le projet est organisé de la manière suivante :

- `public/`: Le dossier public contient les fichiers accessibles depuis le navigateur web.
- `assets/`: Les fichiers CSS, JavaScript et les images du site.
- `includes/`: Les fichiers PHP inclus dans le projet.
- `admin/`: L'interface d'administration du site.
- `database/`: Les fichiers SQL et la structure de la base de données.

## Fonctionnalités Principales

Le site web du Garage Automobile de Vincent Parrot comprend les fonctionnalités suivantes :

### Page d'Accueil Publique

- Présente une introduction au garage et ses services.

### Page de Présentation des Services

- Affiche les services proposés par le garage.

### Page d'Affichage des Véhicules d'Occasion

- Permet aux visiteurs de voir les véhicules à vendre avec des détails et des photos.

### Page de Contact

- Permet aux visiteurs de contacter le garage par le biais d'un formulaire ou par téléphone.

### Page des Témoignages Clients

- Affiche les témoignages des clients sur le garage.

### Interface d'Administration

- Permet à l'administrateur de gérer les horaires d'ouverture et aux employés d'ajouter des véhicules d'occasion.

## Personnalisation

Vous pouvez personnaliser le site en modifiant les fichiers CSS, en ajoutant des images pour les véhicules d'occasion, et en ajustant les contenus des pages.

## Contributions

Les contributions à ce projet sont les bienvenues. Si vous trouvez des bugs, des améliorations ou si vous souhaitez ajouter de nouvelles fonctionnalités, n'hésitez pas à créer une demande d'extraction (pull request).

## Licence

Ce projet est sous licence [MIT](LICENSE).