<?php

namespace App\DataFixtures;

use App\Entity\Zone;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ZoneFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $libelles=[
            "Fass","Castor","Keur Massar","Dieupeul"
        ];
        foreach ($libelles as $key => $libelle) {
          $zone=new Zone();
          $zone->setLibelle($libelle);
          $manager->persist($zone);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
