# BeloPerf

Projet de catalogue de cafés réalisé avec Symfony et Twig dans le cadre du TP CoffeeShop, partie 1.

Équipe : Adem, Enzo et Axel.

Le site comprend un accueil, un catalogue et une page contact. L'achat en ligne ne fait pas partie du projet. Pour cette première partie, on travaille sur la structure Symfony, les templates Twig, les assets et les liens entre les pages.

Le dépôt contient pour le moment ce README et le fichier `.gitignore`. L'application Symfony reste à initialiser.

## Répartition

Chacun travaille sur les trois pages, en changeant de responsabilité à chaque étape.

| Travail | Adem | Enzo | Axel |
| --- | --- | --- | --- |
| Symfony : contrôleur, route et données | Accueil | Produits | Contact |
| Twig : structure et contenu de la page | Produits | Contact | Accueil |
| Assets : styles et affichage mobile | Contact | Accueil et slider | Produits |
| Vérification finale avec un collègue | Accueil avec Axel | Produits avec Adem | Contact avec Enzo |

## 1. Préparer le projet ensemble

- [ ] Ajouter Enzo et Axel au dépôt et accepter les invitations.
- [ ] Chacun clone le dépôt et vérifie son accès.
- [ ] Vérifier la version de Symfony demandée en cours et les prérequis sur chaque ordinateur.
- [ ] Choisir les couleurs, les polices, les images et les textes de BeloPerf, en gardant le thème du café.
- [ ] Regarder le thème de référence et retenir les blocs utiles aux trois pages.

Le nom du site est BeloPerf. Le thème de référence est https://coffee-seven-ivory.vercel.app/.

## 2. Installer le socle Symfony

À faire ensemble, en changeant de personne au clavier :

- [ ] Adem initialise une seule application Symfony avec Twig dans le dépôt, sans supprimer ce README.
- [ ] Enzo repère les dossiers `src/Controller`, `templates`, `assets` et `public`, puis complète les commandes d'installation et de lancement dans ce README.
- [ ] Axel configure le chargement des assets et vérifie qu'une modification de style apparaît dans le navigateur.
- [ ] Chacun récupère le socle, installe les dépendances et lance le projet sur son ordinateur.

On passe à la suite quand le même projet fonctionne chez les trois membres.

## 3. Créer les routes et les contrôleurs

| Membre | Fichier prévu | URL | Nom de route proposé | Vue à afficher |
| --- | --- | --- | --- | --- |
| Adem | `src/Controller/HomeController.php` | `/` | `app_home` | `home/index.html.twig` |
| Enzo | `src/Controller/ProductController.php` | `/produits` | `app_products` | `product/index.html.twig` |
| Axel | `src/Controller/ContactController.php` | `/contact` | `app_contact` | `contact/index.html.twig` |

Les fichiers `.php` du tableau sont les contrôleurs Symfony.

- [ ] Chacun crée son contrôleur, sa route et une vue minimale pour vérifier l'affichage.
- [ ] Adem prépare des données de démonstration pour les slides, les cafés tendance et les témoignages.
- [ ] Enzo prépare plusieurs produits avec nom, prix, marque, catégorie et chemin d'image.
- [ ] Axel prépare les informations de contact à afficher.
- [ ] Définir ensemble les noms des variables transmis aux templates pour faciliter le passage de relais.

Pas besoin de mettre en place une base de données pour commencer l'intégration : des données de démonstration transmises aux vues suffisent à cette étape.

## 4. Préparer les éléments communs

- [ ] Enzo crée `templates/base.html.twig`, avec le titre de page, les assets et les blocs utilisés par les autres templates.
- [ ] Adem crée `templates/partials/_navbar.html.twig`, avec les liens Accueil, Nos produits et Contact.
- [ ] Axel crée `templates/partials/_footer.html.twig`, avec l'adresse, le téléphone et l'email de démonstration.
- [ ] Axel pose les styles communs : couleurs, polices, boutons, largeur des contenus et espacements.
- [ ] Chacun vérifie que ses vues utilisent le même layout et que la navigation fonctionne.

Utiliser les noms de routes avec `path()` dans Twig. Vérifier le chargement des images et des autres assets selon la configuration choisie.

Fusionner le socle commun avant de commencer l'intégration détaillée des pages.

## 5. Construire les templates Twig

### Accueil — Axel

- [ ] Créer les sections dans `templates/home/index.html.twig`.
- [ ] Afficher le slider : titre, description et bouton pour chaque slide.
- [ ] Ajouter la présentation « À propos de nous ».
- [ ] Afficher les cafés en tendance avec les données transmises par Adem.
- [ ] Ajouter les témoignages clients de démonstration.
- [ ] Relier les boutons aux pages correspondantes.

### Produits — Adem

- [ ] Créer la grille dans `templates/product/index.html.twig`.
- [ ] Créer une carte réutilisable dans `templates/components/_product_card.html.twig`.
- [ ] Afficher les produits transmis par Enzo, avec leur nom, prix et image.
- [ ] Réutiliser la carte pour les cafés tendance de l'accueil, en coordination avec Axel.
- [ ] Ajouter le formulaire de filtres : marque, catégorie et prix.
- [ ] Mettre des labels sur les champs et prévoir un bouton pour les filtres.

### Contact — Enzo

- [ ] Construire le formulaire dans `templates/contact/index.html.twig`.
- [ ] Ajouter les champs nom, prénom, email, téléphone et message.
- [ ] Associer chaque label à son champ.
- [ ] Utiliser un champ email, un champ téléphone et une zone de texte pour le message.
- [ ] Ajouter le bouton du formulaire et les coordonnées utiles.

Pour cette partie, le sujet demande surtout l'intégration des interfaces. Le traitement réel des filtres et l'envoi du formulaire ne sont pas explicitement détaillés : vérifier les attentes du cours avant de les ajouter. Tant que le contact n'est pas traité, ne pas afficher de confirmation d'envoi.

## 6. Travailler les styles et les interactions

### Accueil — Enzo

- [ ] Mettre en forme le slider, la présentation, les cafés tendance et les témoignages.
- [ ] Ajouter les commandes du slider et vérifier le changement de slide.
- [ ] Adapter les sections à un écran mobile.
- [ ] Faire participer Adem et Axel au slider, avec rotation au clavier, pour que chacun comprenne son fonctionnement.

### Produits — Axel

- [ ] Mettre en forme les cartes et la grille des produits.
- [ ] Organiser les filtres pour qu'ils restent lisibles sur ordinateur et mobile.
- [ ] Harmoniser les images et les espacements.
- [ ] Vérifier que la carte partagée reste correcte sur l'accueil.

### Contact — Adem

- [ ] Mettre en forme les champs, les labels et le bouton.
- [ ] Adapter la largeur du formulaire aux petits écrans.
- [ ] Vérifier les espacements et la visibilité du focus au clavier.
- [ ] Harmoniser les coordonnées avec le footer commun.

## 7. Relire et réunir le travail

Chacun crée ses branches, ses commits et ses pull requests. Enzo relit Adem, Axel relit Enzo et Adem relit Axel. À chaque passage de relais, expliquer les fichiers modifiés et les données utilisées.

- [ ] Vérifier que les trois URLs affichent la bonne page.
- [ ] Tester tous les liens de la navigation et tous les boutons.
- [ ] Vérifier le slider, les cafés tendance et les témoignages.
- [ ] Vérifier la grille des produits et les trois critères de filtre.
- [ ] Vérifier les cinq champs du formulaire contact.
- [ ] Contrôler les images, les erreurs Twig et les erreurs dans la console du navigateur.
- [ ] Tester chaque page sur ordinateur et mobile.
- [ ] Supprimer les liens vers les pages absentes, le panier et le paiement.
- [ ] Vérifier les routes et les templates avec les outils Symfony disponibles.

Éviter de modifier simultanément `base.html.twig` ou les styles communs. Prévenir les autres avant une modification d'un composant partagé.

## 8. Préparer le rendu

- [ ] Chacun teste l'installation depuis un nouveau clone avec les commandes du README.
- [ ] Compléter ce README avec les prérequis et les commandes exactes une fois Symfony installé.
- [ ] Indiquer les fonctionnalités terminées et les éventuelles limites.
- [ ] Garder les références des images et autres ressources utilisées.
- [ ] Vérifier qu'aucun mot de passe ni fichier local sensible n'est versionné.
- [ ] Préparer une démonstration des trois pages : chacun explique un contrôleur Symfony, un template Twig et une contribution aux styles.

## Ordre de travail

Préparation → installation Symfony → routes et socle commun → templates Twig → styles et interactions → vérification croisée → rendu.

À chaque phase, les trois membres peuvent travailler en parallèle sur leurs fichiers. On fusionne et on vérifie avant de passer à la phase suivante.
