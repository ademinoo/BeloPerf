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
            ['nom' => 'Stage 1', 'prix' => 349],
            ['nom' => 'Downpipe inox', 'prix' => 299],
        ];

        return $this->render('index.html.twig', [
            'produits' => $produits,
        ]);
    }

    #[Route('/boutique', name: 'app_shop')]
    public function boutique(): Response
    {
        return $this->render('shop.html.twig');
    }
}
