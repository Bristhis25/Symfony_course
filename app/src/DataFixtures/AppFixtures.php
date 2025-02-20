<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Music;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=1; $i < 11; $i++) {
            $music = new Music();
            $music->setName("Music" . $i);
            $music->seturl("url" . $i);
            $manager->persist($music);
        }

        $manager->flush();
    }
}