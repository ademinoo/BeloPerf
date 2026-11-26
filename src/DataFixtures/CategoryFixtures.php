<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $names = ['Stages', 'Échappement', 'Admission', 'Cartographie', 'Suralimentation', 'Suspension', 'Freinage'];

        foreach ($names as $index => $name) {
            $category = new Category();
            $category->setName($name);

            $manager->persist($category);
            $this->addReference('category-' . $index, $category); // Repère pour retrouver la catégorie dans les fixtures.
        }

        $manager->flush(); // Enregistre toutes les catégories dans la base.
    }
}