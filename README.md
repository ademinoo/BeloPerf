# CoffeeShop — TP Symfony, partie 1

Projet de catalogue de cafés réalisé à trois : Adem, Enzo et Axel.

## Objectif

Construire un site Symfony avec Twig, des assets partagés et trois pages reliées par des routes : accueil, produits et contact. La partie 1 porte sur la structure et l'intégration des pages. L'achat en ligne est explicitement exclu par le sujet.

**État actuel :** dépôt de préparation et documentation. L'application Symfony n'est pas encore initialisée et aucune fonctionnalité n'est implémentée.

## Documents

- [Analyse du sujet](docs/ANALYSE.md) : exigences, limites et modèle de données.
- [Plan étape par étape](docs/PLAN.md) : tâches, dépendances et critères de validation.
- [Travail en équipe](CONTRIBUTING.md) : répartition proposée et méthode Git.

## Pages prévues

| Page | URL proposée | Route proposée | Contenu |
| --- | --- | --- | --- |
| Accueil | `/` | `app_home` | Slider, présentation, cafés tendance, témoignages |
| Produits | `/produits` | `app_products` | Catalogue et formulaire de filtres marque, catégorie, prix |
| Contact | `/contact` | `app_contact` | Nom, prénom, email, téléphone, message |

Navigation et footer avec coordonnées partagés entre les pages.

## Commencer

1. Cloner le dépôt : `git clone https://github.com/ademinoo/coffeeshop.git`.
2. Lire le plan et se répartir les tâches.
3. Réaliser ensemble le socle Symfony avant de démarrer les trois pages en parallèle.

Les commandes d'installation et de lancement seront ajoutées après le choix et l'initialisation de la version Symfony. Ne pas installer trois projets Symfony indépendants.

## Source

Sujet fourni : « Coffeeshop - Partie 1 », BTS 2 — PHP Symfony — CoffeeShop, deux pages.

Thème de référence : https://coffee-seven-ivory.vercel.app/ ; le sujet demande de le personnaliser et de supprimer les blocs inutiles. Le PDF reste hors du dépôt.
