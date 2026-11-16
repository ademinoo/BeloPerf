# Plan de réalisation — partie 1

La répartition ci-dessous est une proposition. Les étapes 0 à 3 doivent précéder le travail indépendant sur les pages. Pas d'échéance inventée : adapter le calendrier à la date de rendu donnée en cours.

## Étape 0 — Cadrer le travail (ensemble)

- [ ] Confirmer la version de PHP/Symfony attendue en cours.
- [ ] Choisir le nom, les couleurs, les polices et les contenus de démonstration.
- [ ] Relire les trois pages demandées et distinguer intégration et traitement métier.
- [ ] Convenir des noms de routes et des fichiers partagés.

Terminé quand : les trois membres connaissent leur périmètre et utilisent les mêmes conventions.

## Étape 1 — Accès Git et environnement (Adem, puis chacun)

- [x] Créer le dépôt et publier l'analyse et le plan.
- [ ] Adem ajoute Enzo et Axel via Settings → Collaborators avec leurs identifiants GitHub.
- [ ] Enzo et Axel acceptent l'invitation puis clonent le dépôt.
- [ ] Chacun vérifie PHP, Composer, Git et, si retenue, Symfony CLI.

Terminé quand : les trois peuvent récupérer le dépôt et publier une branche.

## Étape 2 — Initialiser Symfony (Adem)

- [ ] Créer une seule application Symfony dans le dépôt, avec Twig et les dépendances web nécessaires.
- [ ] Respecter la version du cours ; ne pas choisir automatiquement la version la plus récente.
- [ ] Conserver les documents existants lors de l'initialisation, éventuellement via un dossier temporaire.
- [ ] Définir le système d'assets et son point d'entrée CSS/JS.
- [ ] Versionner `composer.json`, `composer.lock` et les fichiers Symfony utiles.
- [ ] Documenter les commandes exactes d'installation et de lancement dans le README.
- [ ] Vérifier le lancement local puis fusionner le socle sur `main`.

Terminé quand : chaque membre peut installer et lancer la même application à partir du README.

## Étape 3 — Construire le socle commun (Adem, revue Enzo et Axel)

- [ ] Créer les trois contrôleurs, routes et vues minimales.
- [ ] Créer `base.html.twig`, la navigation et le footer partagé.
- [ ] Utiliser `path()` pour les routes et `asset()` pour les fichiers publics selon le système retenu.
- [ ] Définir couleurs, typographie, espacements, boutons et conteneurs communs.
- [ ] Préparer les données de démonstration et une carte produit réutilisable avec Enzo.

Terminé quand : les trois URLs répondent, la navigation fonctionne et les assets se chargent. Fusionner cette étape avant de commencer les trois pages en parallèle.

## Étape 4 — Intégrer l'accueil (Adem)

- [ ] Slider avec titre, description, bouton et commandes utilisables.
- [ ] Section « À propos ».
- [ ] Cafés en tendance avec les cartes partagées ; convenir de la correspondance avec `best_seller`.
- [ ] Témoignages de démonstration.
- [ ] Boutons reliés aux bonnes pages ; coordonnées fictives clairement utilisées pour le TP.

Terminé quand : tous les blocs demandés sont visibles et le slider fonctionne sur ordinateur et mobile.

## Étape 5 — Intégrer le catalogue (Enzo)

- [ ] Afficher plusieurs produits de démonstration : nom, prix et image, avec marque et catégorie pour rendre les filtres compréhensibles.
- [ ] Créer/réutiliser `components/_product_card.html.twig`.
- [ ] Afficher les filtres marque, catégorie et prix avec leurs labels.
- [ ] Prévoir une présentation lisible sur mobile.
- [ ] Si un traitement des filtres est demandé en cours, définir les paramètres GET et ajouter ce comportement dans une tâche distincte.

Terminé quand : catalogue et formulaire correspondent au sujet, sans bouton d'achat ni panier.

## Étape 6 — Intégrer le contact (Axel)

- [ ] Afficher nom, prénom, email, téléphone et message.
- [ ] Relier chaque label à son champ ; utiliser les types email et téléphone appropriés.
- [ ] Intégrer un bouton cohérent et les éventuelles coordonnées utiles.
- [ ] Rendre explicite le statut de démonstration si aucun envoi n'est implémenté.
- [ ] Vérifier la lisibilité et l'utilisation au clavier et sur mobile.

Terminé quand : les cinq champs sont présents et aucune interface ne prétend avoir envoyé un message non traité.

## Étape 7 — Réunir et vérifier (ensemble)

- [ ] Ouvrir une pull request par page ; faire relire par un autre membre.
- [ ] Résoudre les conflits et vérifier les fichiers partagés après chaque fusion.
- [ ] Retirer les liens inutiles du thème : panier, paiement et pages absentes.
- [ ] Vérifier les trois routes, tous les liens, images et boutons.
- [ ] Vérifier le slider, les cinq champs contact et les trois critères de filtre.
- [ ] Vérifier l'absence d'erreurs Twig, d'assets manquants et d'erreurs JavaScript.
- [ ] Tester sur une largeur mobile et une largeur ordinateur.
- [ ] Exécuter les vérifications Symfony disponibles : `php bin/console debug:router`, `php bin/console lint:twig templates` et `composer validate`.

Terminé quand : une relecture croisée confirme chaque exigence du sujet.

## Étape 8 — Préparer le rendu (ensemble)

- [ ] Tester l'installation depuis un clone propre avec les commandes du README.
- [ ] Compléter le README : prérequis, installation, lancement, auteurs, fonctionnalités et limites.
- [ ] Documenter la provenance des assets utilisés.
- [ ] Préparer une démonstration accueil → produits → contact.
- [ ] Vérifier qu'aucun secret, dossier `vendor` ou `node_modules` n'est versionné.

Terminé quand : le professeur peut récupérer et lancer le projet sans explication orale indispensable.

## Ordre et répartition

```text
Cadrage → accès → Symfony → socle commun
                                ├── Accueil : Adem
                                ├── Catalogue : Enzo
                                └── Contact : Axel
                             → revue croisée → rendu
```

Pour équilibrer la charge, Axel peut prendre la vérification mobile et l'installation depuis un clone propre, Enzo la revue des composants produit, Adem l'intégration finale. Chaque membre doit néanmoins comprendre les routes, le layout et le lancement du projet.
