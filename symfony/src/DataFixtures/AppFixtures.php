<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Plat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $cat1 = new Categorie();
        $cat1->setNom("Pizza");
        $manager->persist($cat1);

        $cat2 = new Categorie();
        $cat2->setNom("Burger");
        $manager->persist($cat2);


        $p1 = new Plat();
        $p1->setNom("Fromagio");
        $p1->setImage("pizza1.png");
        $manager->persist($p1);
        

        $p1->setCategorie($cat1);
        // ou
        $cat1->addPlat($p1);

        $manager->flush();
    }
}
