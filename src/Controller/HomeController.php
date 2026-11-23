<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
   public function index(): Response
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
         ];

        return $this->render('index.html.twig', [
            'produits' => $produits,
        ]);
    }

    #[Route('/boutique', name: 'app_shop')]
    public function boutique(): Response
    {
        $produits = [
            [
                'id' => 1,
                'nom' => 'Stage 1',
                'prix' => 349,
                'marque' => 'BeloPerf',
                'categorie' => 'Stages',
                'description' => 'Optimisation électronique du calculateur moteur.',
                'image' => 'images/produits/stage-1-reprogrammation-ecu.webp',
            ],
            [
                'id' => 2,
                'nom' => 'Stage 2',
                'prix' => 549,
                'marque' => 'BeloPerf',
                'categorie' => 'Stages',
                'description' => 'Cartographie adaptée aux modifications mécaniques du véhicule.',
                'image' => 'images/produits/stage-2-cartographie.webp',
            ],
            [
                'id' => 3,
                'nom' => 'Stage 3',
                'prix' => 1199,
                'marque' => 'BeloPerf',
                'categorie' => 'Stages',
                'description' => 'Préparation moteur et calibration personnalisées selon le projet.',
                'image' => 'images/produits/stage-3-preparation.webp',
            ],
            [
                'id' => 4,
                'nom' => 'Downpipe inox',
                'prix' => 299,
                'marque' => 'BeloPerf',
                'categorie' => 'Échappement',
                'description' => 'Descente d’échappement en inox pour une préparation moteur.',
                'image' => 'images/produits/downpipe-inox.webp',
            ],
            [
                'id' => 5,
                'nom' => 'Filtre à air sport',
                'prix' => 79,
                'marque' => 'BeloPerf',
                'categorie' => 'Admission',
                'description' => 'Filtre à air sport pour le circuit d’admission.',
                'image' => 'images/produits/filtre-a-air-sport.webp',
            ],
            [
                'id' => 6,
                'nom' => 'Cartographie Pop & Bang',
                'prix' => 179,
                'marque' => 'BeloPerf',
                'categorie' => 'Cartographie',
                'description' => 'Cartographie moteur dédiée à la sonorité à la décélération.',
                'image' => 'images/produits/pop-and-bang.webp',
            ],
            [
                'id' => 7,
                'nom' => 'Turbo performance',
                'prix' => 899,
                'marque' => 'BeloPerf',
                'categorie' => 'Suralimentation',
                'description' => 'Turbocompresseur pour un projet de préparation moteur.',
                'image' => 'images/produits/turbo-performance.webp',
            ],
            [
                'id' => 8,
                'nom' => 'Intercooler',
                'prix' => 399,
                'marque' => 'BeloPerf',
                'categorie' => 'Admission',
                'description' => 'Échangeur destiné au refroidissement de l’air de suralimentation.',
                'image' => 'images/produits/intercooler.webp',
            ],
            [
                'id' => 9,
                'nom' => 'Kit admission carbone',
                'prix' => 249,
                'marque' => 'BeloPerf',
                'categorie' => 'Admission',
                'description' => 'Kit d’admission avec boîtier en carbone pour le compartiment moteur.',
                'image' => 'images/produits/kit-admission-carbone.webp',
            ],
            [
                'id' => 10,
                'nom' => 'Échappement inox double sortie',
                'prix' => 599,
                'marque' => 'BeloPerf',
                'categorie' => 'Échappement',
                'description' => 'Échappement en inox équipé d’une double sortie.',
                'image' => 'images/produits/echappement-inox-double-sortie.webp',
            ],
            [
                'id' => 11,
                'nom' => 'Suspension sport',
                'prix' => 699,
                'marque' => 'BeloPerf',
                'categorie' => 'Suspension',
                'description' => 'Ensemble de suspension pour une préparation du châssis.',
                'image' => 'images/produits/suspension-sport.webp',
            ],
            [
                'id' => 12,
                'nom' => 'Kit frein sport disque et étrier',
                'prix' => 449,
                'marque' => 'BeloPerf',
                'categorie' => 'Freinage',
                'description' => 'Ensemble de freinage sport comprenant un disque et un étrier.',
                'image' => 'images/produits/frein-sport-disque-etrier.webp',
            ],
        ];

        return $this->render('shop.html.twig', [
            'produits' => $produits,
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('contact.html.twig');
    }
}
