<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Brand;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $names = ['BeloPerf', 'BeloPerf Parts', 'BeloPerf Racing'];

        foreach ($names as $index => $name) {
            $brand = new Brand();
            $brand->setName($name);

            $manager->persist($brand);
            $this->addReference('brand-' . $index, $brand);
        }

        $manager->flush();
    }
}
