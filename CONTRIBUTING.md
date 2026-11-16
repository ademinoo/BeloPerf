# Travailler à trois sur BeloPerf

## Rotation des responsabilités

| Membre | PHP/Symfony | Twig/HTML | CSS et mobile |
| --- | --- | --- | --- |
| Adem | Accueil | Catalogue et carte produit | Contact |
| Enzo | Catalogue | Contact | Accueil et comportement du slider |
| Axel | Contact | Accueil | Catalogue |

Chacun intervient sur les trois pages et sur chaque aspect principal. Le socle est également partagé : Adem initialise Symfony, Enzo prépare le layout Twig et Axel branche les assets. Réaliser cette préparation ensemble, en changeant de personne au clavier à chaque tâche, puis vérifier chacun le lancement local.

Ces responsabilités organisent le travail ; elles ne correspondent pas à des assignations GitHub, les comptes d'Enzo et Axel n'étant pas encore connus.

## Passages de relais

1. Convenir ensemble des variables transmises aux vues et des composants communs.
2. Première vague : chacun réalise son contrôleur, sa route et ses données PHP.
3. Deuxième vague : chacun réalise le Twig d'une autre page avec les variables convenues.
4. Troisième vague : chacun réalise les styles et l'affichage mobile de la troisième page.
5. À chaque passage, expliquer son code au suivant et fusionner la tâche avant la suivante sur les mêmes fichiers.

Chacun crée ses branches, ses commits et ses pull requests. Pour les relectures : Enzo relit Adem, Axel relit Enzo, Adem relit Axel. Le responsable PHP de chaque page réalise ensuite sa vérification finale avec un collègue. À la démonstration, chacun présente un contrôleur, un template et une adaptation mobile auxquels il a contribué.

## Méthode Git

1. Récupérer `main` avant de commencer : `git switch main` puis `git pull --ff-only`.
2. Créer une branche par tâche : `git switch -c feat/catalogue` par exemple.
3. Faire des commits courts et explicites : `feat: intégrer la grille des cafés`.
4. Publier la branche : `git push -u origin feat/catalogue`.
5. Ouvrir une pull request vers `main` et demander une relecture à un collègue.
6. Vérifier le résultat puis fusionner. Les relectures sont une convention d'équipe, pas une règle de protection déjà configurée.

Branches suggérées : `chore/symfony-init`, `feat/layout`, `feat/accueil-php`, `feat/catalogue-twig`, `style/contact`. Préférer une pull request par tâche et par aspect plutôt qu'une seule pull request regroupant une page entière.

## Éviter les conflits

- Attendre la fusion du socle avant de commencer les pages.
- Prévenir les autres avant de modifier `base.html.twig`, les dépendances ou les styles globaux.
- Séparer les styles par page si nécessaire, en gardant des composants communs cohérents.
- Ne pas travailler à trois simultanément sur le même fichier de layout.
- Ne jamais écraser l'historique partagé par un push forcé sur `main`.

## Avant une pull request

- Vérifier sa page, la navigation et l'affichage mobile.
- Décrire ce qui a changé et comment cela a été vérifié.
- Signaler les parties encore purement visuelles : filtre, contact, données de démonstration.
- Ne pas committer les mots de passe, jetons, fichiers `.env.local` ou dépendances installées.
