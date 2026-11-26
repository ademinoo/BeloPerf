<?php

namespace App\DataFixtures;

use App\Entity\Slider;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
class SliderFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $slides = [
            [
                'title' => 'Plus de puissance. Plus de sensations.',
                'content' => 'Découvrez nos stages moteur et nos pièces de performance.',
                'buttonText' => 'Explorer la boutique',
                'buttonLink' => '/boutique',
            ],
            [
                'title' => 'Préparons votre projet ensemble',
                'content' => 'Une question sur la compatibilité d’une pièce avec votre véhicule ? Écrivez-nous.',
                'buttonText' => 'Nous contacter',
                'buttonLink' => '/contact',
            ],
        ];

        foreach ($slides as $data) {
            $slider = new Slider();
            $slider->setTitle($data['title']);
            $slider->setContent($data['content']);
            $slider->setButtonText($data['buttonText']);
            $slider->setButtonLink($data['buttonLink']);

            $manager->persist($slider);
        }

        $manager->flush();
    }
}
