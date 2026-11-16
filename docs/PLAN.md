# BeloPerf — Plan de réalisation, partie 1

La répartition fait tourner les responsabilités pour que chacun pratique Symfony/PHP, Twig/HTML, CSS, Git et les vérifications. Les étapes 0 à 3 précèdent l'intégration détaillée. Les étapes 4 à 6 décrivent les pages ; les réaliser par vagues techniques selon la matrice finale. Adapter le calendrier à la date de rendu donnée en cours.

## Étape 0 — Cadrer le travail (ensemble)

- [ ] Confirmer la version de PHP/Symfony attendue en cours.
- [x] Nom retenu : BeloPerf.
- [ ] Choisir les couleurs, les polices et les contenus de démonstration.
- [ ] Relire les trois pages demandées et distinguer intégration et traitement métier.
- [ ] Convenir des noms de routes et des fichiers partagés.

Terminé quand : les trois membres connaissent leur périmètre et utilisent les mêmes conventions.

## Étape 1 — Accès Git et environnement (Adem, puis chacun)

- [x] Créer le dépôt et publier l'analyse et le plan.
- [ ] Adem ajoute Enzo et Axel via Settings → Collaborators avec leurs identifiants GitHub.
- [ ] Enzo et Axel acceptent l'invitation puis clonent le dépôt.
- [ ] Chacun vérifie PHP, Composer, Git et, si retenue, Symfony CLI.

Terminé quand : les trois peuvent récupérer le dépôt et publier une branche.

## Étape 2 — Initialiser Symfony (ensemble, clavier tournant)

- [ ] Adem : créer une seule application Symfony dans le dépôt, avec Twig et les dépendances web nécessaires, en expliquant les fichiers générés aux deux autres.
- [ ] Respecter la version du cours ; ne pas choisir automatiquement la version la plus récente.
- [ ] Conserver les documents existants lors de l'initialisation, éventuellement via un dossier temporaire.
- [ ] Axel : définir le système d'assets et son point d'entrée CSS/JS, avec revue commune.
- [ ] Versionner `composer.json`, `composer.lock` et les fichiers Symfony utiles.
- [ ] Enzo : documenter les commandes exactes d'installation et de lancement dans le README, puis les faire suivre aux deux autres.
- [ ] Vérifier le lancement local puis fusionner le socle sur `main`.

Terminé quand : chaque membre peut installer et lancer la même application à partir du README.

## Étape 3 — Construire le socle commun (responsabilités partagées)

- [ ] Créer les contrôleurs et routes : accueil par Adem, catalogue par Enzo, contact par Axel. Chacun ajoute une vue minimale pour vérifier sa route.
- [ ] Enzo crée `base.html.twig`, Adem la navigation et Axel le footer partagé ; relire ces composants ensemble.
- [ ] Utiliser `path()` pour les routes et `asset()` pour les fichiers publics selon le système retenu.
- [ ] Définir ensemble les conventions CSS ; Axel intègre les styles communs, avec revue d'Adem et Enzo.
- [ ] Enzo prépare les données produit ; Adem prépare la carte produit réutilisable et les données d'accueil ; Axel prépare les données utiles au contact.

Terminé quand : les trois URLs répondent, la navigation fonctionne et les assets se chargent. Fusionner cette étape avant l'intégration détaillée. Chacun doit pouvoir expliquer le chemin route → contrôleur → Twig → assets.

## Étape 4 — Intégrer l'accueil (PHP : Adem ; Twig : Axel ; CSS/slider : Enzo)

- [ ] Slider avec titre, description, bouton et commandes utilisables.
- [ ] Section « À propos ».
- [ ] Cafés en tendance avec les cartes partagées ; convenir de la correspondance avec `best_seller`.
- [ ] Témoignages de démonstration.
- [ ] Boutons reliés aux bonnes pages ; coordonnées fictives clairement utilisées pour le TP.

Terminé quand : tous les blocs demandés sont visibles et le slider fonctionne sur ordinateur et mobile.

## Étape 5 — Intégrer le catalogue (PHP : Enzo ; Twig : Adem ; CSS : Axel)

- [ ] Afficher plusieurs produits de démonstration : nom, prix et image, avec marque et catégorie pour rendre les filtres compréhensibles.
- [ ] Créer/réutiliser `components/_product_card.html.twig`.
- [ ] Afficher les filtres marque, catégorie et prix avec leurs labels.
- [ ] Prévoir une présentation lisible sur mobile.
- [ ] Si un traitement des filtres est demandé en cours, définir les paramètres GET et ajouter ce comportement dans une tâche distincte.

Terminé quand : catalogue et formulaire correspondent au sujet, sans bouton d'achat ni panier.

## Étape 6 — Intégrer le contact (PHP : Axel ; Twig : Enzo ; CSS : Adem)

- [ ] Afficher nom, prénom, email, téléphone et message.
- [ ] Relier chaque label à son champ ; utiliser les types email et téléphone appropriés.
- [ ] Intégrer un bouton cohérent et les éventuelles coordonnées utiles.
- [ ] Rendre explicite le statut de démonstration si aucun envoi n'est implémenté.
- [ ] Vérifier la lisibilité et l'utilisation au clavier et sur mobile.

Terminé quand : les cinq champs sont présents et aucune interface ne prétend avoir envoyé un message non traité.

## Étape 7 — Réunir et vérifier (ensemble)

- [ ] Chacun ouvre ses pull requests par tâche : contrôleur/données, template ou styles. Relecture : Enzo relit Adem, Axel relit Enzo, Adem relit Axel.
- [ ] Résoudre les conflits et vérifier les fichiers partagés après chaque fusion.
- [ ] Retirer les liens inutiles du thème : panier, paiement et pages absentes.
- [ ] Vérifier les trois routes, tous les liens, images et boutons.
- [ ] Vérifier le slider, les cinq champs contact et les trois critères de filtre.
- [ ] Vérifier l'absence d'erreurs Twig, d'assets manquants et d'erreurs JavaScript.
- [ ] Chacun teste sa contribution sur une largeur mobile et une largeur ordinateur, puis vérifie une contribution d'un collègue.
- [ ] Chacun exécute les vérifications Symfony disponibles et sait lire leur résultat : `php bin/console debug:router`, `php bin/console lint:twig templates` et `composer validate`.

Terminé quand : une relecture croisée confirme chaque exigence du sujet.

## Étape 8 — Préparer le rendu (ensemble)

- [ ] Chacun teste l'installation depuis un clone propre avec les commandes du README.
- [ ] Compléter le README : prérequis, installation, lancement, auteurs, fonctionnalités et limites.
- [ ] Documenter la provenance des assets utilisés.
- [ ] Préparer une démonstration accueil → produits → contact : chacun explique une contribution PHP, Twig et CSS.
- [ ] Vérifier qu'aucun secret, dossier `vendor` ou `node_modules` n'est versionné.

Terminé quand : le professeur peut récupérer et lancer le projet sans explication orale indispensable.

## Ordre et répartition

| Vague | Adem | Enzo | Axel |
| --- | --- | --- | --- |
| 1 — PHP/Symfony | Contrôleur, route et données accueil | Contrôleur, route et données catalogue | Contrôleur, route et données contact |
| 2 — Twig/HTML | Catalogue et carte produit | Formulaire contact | Sections accueil |
| 3 — CSS et mobile | Contact | Accueil et JavaScript du slider | Catalogue |
| 4 — Vérification finale | Accueil avec Axel | Catalogue avec Adem | Contact avec Enzo |

Les tâches d'une même vague peuvent avancer en parallèle sur des fichiers différents. Fusionner le travail et transmettre les conventions de données avant la vague suivante. Personne ne modifie simultanément le même fichier partagé.

Le slider demandera probablement plus de JavaScript que les autres pages : le développer en binôme avec rotation au clavier, Enzo coordonnant le résultat. Ajuster la charge ensemble après chaque vague. L'objectif est que chacun produise du code dans les trois aspects et comprenne l'ensemble, pas seulement qu'il assiste au travail des autres.
