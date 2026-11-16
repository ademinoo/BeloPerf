# Travailler à trois

## Répartition proposée

| Membre | Responsabilité principale | Relecture proposée |
| --- | --- | --- |
| Adem | Socle Symfony, layout partagé, accueil et intégration | Contact |
| Enzo | Catalogue, filtres visuels et carte produit | Accueil |
| Axel | Contact, vérification mobile et installation depuis un clone propre | Catalogue |

Cette répartition est à valider entre vous. Elle ne correspond pas à des assignations GitHub : les comptes d'Enzo et Axel ne sont pas encore connus.

## Méthode Git

1. Récupérer `main` avant de commencer : `git switch main` puis `git pull --ff-only`.
2. Créer une branche par tâche : `git switch -c feat/catalogue` par exemple.
3. Faire des commits courts et explicites : `feat: intégrer la grille des cafés`.
4. Publier la branche : `git push -u origin feat/catalogue`.
5. Ouvrir une pull request vers `main` et demander une relecture à un collègue.
6. Vérifier le résultat puis fusionner. Les relectures sont une convention d'équipe, pas une règle de protection déjà configurée.

Branches suggérées : `chore/symfony-init`, `feat/layout`, `feat/accueil`, `feat/catalogue`, `feat/contact`.

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
