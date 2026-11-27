<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categories = [
            ['name' => 'Stages', 'image' => 'images/categories/stages.webp'],
            ['name' => 'Échappement', 'image' => 'images/categories/downpipes.webp'],
            ['name' => 'Admission', 'image' => 'images/categories/filtres-a-air.webp'],
            ['name' => 'Cartographie', 'image' => 'images/categories/pop-and-bang.webp'],
            ['name' => 'Suralimentation', 'image' => 'images/produits/turbo-performance.webp'],
            ['name' => 'Suspension', 'image' => 'images/produits/suspension-sport.webp'],
            ['name' => 'Freinage', 'image' => 'images/produits/frein-sport-disque-etrier.webp'],
        ];

        // $index est la position dans le tableau. $data contient le nom et l’image.
        foreach ($categories as $index => $data) {
            $category = new Category();
            $category->setName($data['name']);
            $category->setImage($data['image']);

            $manager->persist($category);
            $this->addReference('category-' . $index, $category); // Repère utilisé par ProductFixtures.
        }

        $manager->flush(); // Enregistre toutes les catégories en base.
    }
}