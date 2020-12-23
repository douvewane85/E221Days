<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Bien;
use App\Repository\TypeRepository;
use App\Repository\ZoneRepository;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class BienFixtures extends Fixture implements  DependentFixtureInterface
{
    private  $repoType;
    private  $repoZone;

        public  function __construct(TypeRepository $repoType,ZoneRepository  $repoZone){
          $this->repoType=$repoType;
          $this->repoZone=$repoZone;
        }
    public function load(ObjectManager $manager)
    {
       $types=$this->repoType->findAll();
       $zones=$this->repoZone->findAll();

       for ($i=0; $i <10 ; $i++) { 
           $idZone=rand(1,count($zones)-1);
           $idType=rand(1,count($types)-1);
          $bien=new Bien();
          $bien->setTitre($types[$idType]->getLibelle());
          $bien->setDescription("Lorem, ipsum dolor sit amet consectetur adipisicing elit. In aliquam tempore ea, earum explicabo fuga laborum minima, omnis possimus dolor consequuntur optio dignissimos accusamus corrupti maxime. Cupiditate dignissimos magni ducimus?");
          $bien->setPrix(300000)
                ->setCreateAt(new DateTime())
                ->SetisDisponible(true)
                ->setZone($zones[$idZone])
                ->setType( $types[ $idType]);
                $manager->persist($bien);
        }

        $manager->flush();
    }


    public function getDependencies()
   {
       return array(
           TypeFixtures::class,
           ZoneFixtures::class
       );
   }

}
