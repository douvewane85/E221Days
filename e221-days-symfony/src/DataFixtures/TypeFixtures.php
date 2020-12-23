<?php

namespace App\DataFixtures;

use App\Entity\Type;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class TypeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $libelles=[
            "Immeuble","Appartement","Chambre","Studio"
        ];
        foreach ($libelles as $key => $libelle) {
          $type=new Type();
          $type->setLibelle($libelle);
          $manager->persist($type);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
