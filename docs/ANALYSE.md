# Analyse du sujet

## 1. Ce qui est demandé

La partie 1 demande la mise en place de Symfony, des templates Twig, des assets et du routing. Le sujet annonce que le développement des fonctionnalités viendra par la suite. Il faut donc distinguer l'intégration des interfaces du traitement métier.

### Accueil

- Slider : titre, description et bouton. Prévoir plusieurs diapositives pour démontrer le comportement.
- Texte « À propos de nous ».
- Liste de cafés en tendance.
- Témoignages clients.
- Footer : adresse, téléphone et autres informations de contact.

### Nos produits

- Liste de différents cafés.
- Formulaire pour filtrer par marque, catégorie et prix.
- Pour la partie 1 : afficher les champs et la structure du catalogue. Un filtrage réellement fonctionnel n'est pas explicitement exigé à ce stade ; vérifier les attentes de l'enseignant avant de le traiter comme obligatoire.

### Nous contacter

- Formulaire : nom, prénom, email, téléphone, message.
- Pour la partie 1 : intégrer le formulaire. L'envoi d'email, la persistance et le traitement côté serveur ne sont pas explicitement demandés.
- Si aucun traitement n'existe, ne pas afficher de fausse confirmation d'envoi.

### Éléments transverses

- Utiliser Symfony et Twig, avec une navigation entre les pages.
- Personnaliser le thème tout en conservant l'univers du café.
- Réutiliser les blocs communs : layout, navigation, footer, cartes produit.
- Recommandations de qualité : affichage mobile, labels de formulaire, liens cohérents, images avec texte alternatif.

## 2. Ce qui ne fait pas partie du livrable immédiat

- Panier, commande et paiement : achat en ligne explicitement exclu.
- Administration, authentification, CRUD et base de données opérationnelle : non demandés explicitement dans cette partie.
- Blog, FAQ et pages annexes : présents ou liés dans le thème, mais absents des pages demandées.

Le thème de référence porte le nom « Bean & Brew » et contient notamment présentation, produits, témoignages et contact. Ses références au panier et ses blocs supplémentaires ne deviennent pas des exigences du TP. Vérifier les droits avant de redistribuer ses images ou son code ; être autorisé à s'en inspirer ne précise pas leur licence.

## 3. Modélisation fournie dans le PDF

| Entité | Champs représentés |
| --- | --- |
| Product | id, name, price, note, family, country, best_seller |
| Brand | id, name |
| Category | id, name |
| Admin | id, last_name, first_name, email, password |
| Contact | id, last_name, first_name, email, phone, message |
| Slider | id, title, content, button_link, button_text, message |

Relations représentées :

- Un produit possède exactement une marque ; une marque peut avoir zéro à plusieurs produits.
- Un produit possède exactement une catégorie ; une catégorie peut avoir zéro à plusieurs produits.
- En Doctrine, cela correspondrait à deux relations `ManyToOne` obligatoires côté `Product`.

Points à préciser avant une future implémentation de la base :

- `note` et `family` ne sont pas définis par le sujet : ne pas inventer leur sens métier.
- `Slider.message` est bien présent dans le schéma, mais son rôle par rapport à `content` n'est pas expliqué.
- Aucune image produit ni entité témoignage n'est représentée : des contenus et images de démonstration suffisent pour l'intégration, sans modifier prématurément le modèle.
- Pour une future base : prix en décimal, téléphone en texte, mot de passe administrateur haché. Ce sont des recommandations techniques, pas des champs ou types imposés par le PDF.

## 4. Architecture proposée, à créer

```text
assets/
  styles/app.css
  app.js
public/images/
src/Controller/
  HomeController.php
  ProductController.php
  ContactController.php
templates/
  base.html.twig
  partials/_navbar.html.twig
  partials/_footer.html.twig
  components/_product_card.html.twig
  home/index.html.twig
  product/index.html.twig
  contact/index.html.twig
```

Le mode de chargement des assets dépendra du socle Symfony retenu. Choisir un seul système et le documenter. Les noms de fichiers, les URLs et l'architecture ci-dessus sont des propositions, pas des contraintes du sujet.

Pour commencer, les produits, slides et témoignages peuvent venir de tableaux PHP transmis aux vues. Une base de données n'est pas nécessaire à cette étape.
