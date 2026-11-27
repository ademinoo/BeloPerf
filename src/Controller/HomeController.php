<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $produits = [
            [
                'nom' => 'Stage 1',
                'prix' => 349,
                'description' => 'Optimisation ECU • Sans modification mécanique',
                'image' => 'images/categories/stages.webp',
            ],
            [
                'nom' => 'Downpipe inox',
                'prix' => 299,
                'description' => 'Échappement inox • Pour votre préparation moteur',
                'image' => 'images/categories/downpipes.webp',
            ],
            [
                'nom' => 'Filtre à air sport',
                'prix' => 79,
                'description' => 'Filtration sport • Pour votre admission',
                'image' => 'images/categories/filtres-a-air.webp',
            ],
            [
                'nom' => 'Carto Pop & Bang',
                'prix' => 179,
                'description' => 'Cartographie moteur • Sonorité à la décélération',
                'image' => 'images/produits/pop-and-bang-version-originale.webp',
            ],
        ];

        $avis = [
            ['auteur' => 'Enzo B.', 'message' => 'De bons conseils pour choisir les pièces adaptées à ma voiture.'],
            ['auteur' => 'Adem D.', 'message' => 'Les différences entre les stages sont faciles à comprendre.'],
            ['auteur' => 'Axel R.', 'message' => 'J’ai trouvé rapidement les pièces d’admission que je cherchais.'],
        ];

        return $this->render('index.html.twig', [
            'produits' => $produits,
            'avis' => $avis,
            'categories' => $categoryRepository->findBy([], ['id' => 'ASC'], 5), // affiche que 5 categ
        ]);
    }

    #[Route('/boutique', name: 'app_shop')]
    public function boutique(ProductRepository $productRepository): Response
    {
        return $this->render('shop.html.twig', [
            'produits' => $productRepository->findAll(),
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('contact.html.twig');
    }

    #[Route('/a-propos', name: 'app_about', methods: ['GET'])]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }
}
