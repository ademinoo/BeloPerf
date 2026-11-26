<?php

namespace App\DataFixtures;

use App\Entity\Brand;
use App\Entity\Category;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $products = [
            [
                'name' => 'Filtre à air sport',
                'description' => 'Filtre pour le circuit d’admission, à choisir selon la motorisation.',
                'price' => 7900,
                'note' => 16,
                'family' => 'Moteur',
                'country' => 'France',
                'bestSeller' => true,
                'brand' => 'brand-1',
                'category' => 'category-2',
            ],
            [
                'name' => 'Stage 1',
                'description' => 'Optimisation du calculateur adaptée à la motorisation du véhicule.',
                'price' => 34900,
                'note' => 18,
                'family' => 'Électronique',
                'country' => 'France',
                'bestSeller' => true,
                'brand' => 'brand-0',
                'category' => 'category-0',
            ],
            [
                'name' => 'Stage 2',
                'description' => 'Cartographie adaptée aux modifications mécaniques du véhicule.',
                'price' => 54900,
                'note' => 18,
                'family' => 'Électronique',
                'country' => 'France',
                'bestSeller' => false,
                'brand' => 'brand-0',
                'category' => 'category-0',
            ],
            [
                'name' => 'Stage 3',
                'description' => 'Préparation moteur et réglages personnalisés selon le projet.',
                'price' => 119900,
                'note' => 19,
                'family' => 'Électronique',
                'country' => 'France',
                'bestSeller' => false,
                'brand' => 'brand-0',
                'category' => 'category-0',
            ],
            [
                'name' => 'Cartographie Pop & Bang',
                'description' => 'Cartographie moteur qui modifie la sonorité à la décélération.',
                'price' => 17900,
                'note' => 19,
                'family' => 'Électronique',
                'country' => 'France',
                'bestSeller' => false,
                'brand' => 'brand-0',
                'category' => 'category-3',
            ],
            [
                'name' => 'Downpipe inox',
                'description' => 'Descente d’échappement en inox pour une préparation moteur.',
                'price' => 29900,
                'note' => 17,
                'family' => 'Moteur',
                'country' => 'Allemagne',
                'bestSeller' => false,
                'brand' => 'brand-1',
                'category' => 'category-1',
            ],
            [
                'name' => 'Turbo performance',
                'description' => 'Turbocompresseur pour un projet de préparation moteur.',
                'price' => 89900,
                'note' => 18,
                'family' => 'Moteur',
                'country' => 'Allemagne',
                'bestSeller' => false,
                'brand' => 'brand-2',
                'category' => 'category-4',
            ],
            [
                'name' => 'Intercooler',
                'description' => 'Échangeur qui refroidit l’air comprimé avant son entrée dans le moteur.',
                'price' => 39900,
                'note' => 17,
                'family' => 'Moteur',
                'country' => 'Allemagne',
                'bestSeller' => false,
                'brand' => 'brand-2',
                'category' => 'category-2',
            ],
            [
                'name' => 'Kit admission carbone',
                'description' => 'Kit d’admission avec boîtier en carbone pour le compartiment moteur.',
                'price' => 24900,
                'note' => 18,
                'family' => 'Moteur',
                'country' => 'Italie',
                'bestSeller' => false,
                'brand' => 'brand-1',
                'category' => 'category-2',
            ],
            [
                'name' => 'Échappement inox double sortie',
                'description' => 'Ligne d’échappement en inox équipée de deux sorties.',
                'price' => 59900,
                'note' => 17,
                'family' => 'Moteur',
                'country' => 'Italie',
                'bestSeller' => false,
                'brand' => 'brand-1',
                'category' => 'category-1',
            ],
            [
                'name' => 'Suspension sport',
                'description' => 'Ensemble de suspension pour une préparation du châssis.',
                'price' => 69900,
                'note' => 18,
                'family' => 'Châssis',
                'country' => 'Allemagne',
                'bestSeller' => false,
                'brand' => 'brand-2',
                'category' => 'category-5',
            ],
            [
                'name' => 'Kit frein sport disque et étrier',
                'description' => 'Ensemble de freinage sport comprenant un disque et un étrier.',
                'price' => 44900,
                'note' => 19,
                'family' => 'Châssis',
                'country' => 'Italie',
                'bestSeller' => false,
                'brand' => 'brand-2',
                'category' => 'category-6',
            ],
        ];

        foreach ($products as $data) {
            $product = new Product();
            $product->setName($data['name']);
            $product->setDescription($data['description']);
            $product->setPrice($data['price']);
            $product->setNote($data['note']);
            $product->setFamily($data['family']);
            $product->setCountry($data['country']);
            $product->setBestSeller($data['bestSeller']);
            $product->setBrand($this->getReference($data['brand'], Brand::class));
            $product->setCategory($this->getReference($data['category'], Category::class));

            $manager->persist($product);
        }

        $manager->flush(); // Enregistre tous les produits après la boucle.
    }

    public function getDependencies(): array
    {
        return [AppFixtures::class, CategoryFixtures::class]; // Charge les marques et catégories avant les produits.
    }
}
