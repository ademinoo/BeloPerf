<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ContactFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $contacts = [
            [
                'firstName' => 'Lucas',
                'lastName' => 'Martin',
                'email' => 'lucas.martin@example.test',
                'phone' => null,
                'message' => 'Bonjour, ce filtre à air sport est-il compatible avec ma Golf 7 ?',
            ],
            [
                'firstName' => 'Emma',
                'lastName' => 'Bernard',
                'email' => null,
                'phone' => '01 00 00 00 00',
                'message' => 'Bonjour, pouvez-vous me rappeler pour discuter d’un Stage 1 ?',
            ],
        ];

        foreach ($contacts as $data) {
            $contact = new Contact();
            $contact->setFirstName($data['firstName']);
            $contact->setLastName($data['lastName']);
            $contact->setEmail($data['email']);
            $contact->setPhone($data['phone']);
            $contact->setMessage($data['message']);

            $manager->persist($contact);
        }

        $manager->flush();
    }
}