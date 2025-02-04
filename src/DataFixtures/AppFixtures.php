<?php

namespace App\DataFixtures;

use App\Factory\EducationFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       UserFactory::createMany(10);
       EducationFactory::createMany(10);
    }
}
