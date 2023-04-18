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

        $cat3 = new Categorie();
        $cat3->setNom("Pasta");
        $manager->persist($cat3);


        $p1 = new Plat();
        $p1->setNom("Fromagio 1");
        $p1->setImage("pizza1.png");
        $p1->setCategorie($cat1);
        $manager->persist($p1);

        $p2 = new Plat();
        $p2->setNom("Fromagio 2");
        $p2->setImage("pizza1.png");
        $p2->setCategorie($cat1);
        $manager->persist($p2);

        $p3 = new Plat();
        $p3->setNom("Fromagio 3");
        $p3->setImage("pizza1.png");
        $p3->setCategorie($cat1);
        $manager->persist($p3);

        $p4 = new Plat();
        $p4->setNom("Fromagio 4");
        $p4->setImage("pizza1.png");
        $p4->setCategorie($cat1);
        $manager->persist($p4);

        $manager->flush();
    }
}
