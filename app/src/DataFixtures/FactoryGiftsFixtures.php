<?php

namespace App\DataFixtures;

use App\Entity\FactoryGifts;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class FactoryGiftsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for($factoriesNb = 1; $factoriesNb <= 20; $factoriesNb++){
            $user = $this->getReference('user_'. $faker->numberBetween(2, 20));
            $factoryGifts = new FactoryGifts();
            $factoryGifts->setAddress($faker->address);
            $factoryGifts->addUser($user);
            $factoryGifts->setPhone($faker->phoneNumber);
            $factoryGifts->setName($faker->colorName);
            $factoryGifts->setCountryCode($faker->countryCode);
            $manager->persist($factoryGifts);
            $this->addReference('factory_gifts_'. $factoriesNb, $factoryGifts);
        }
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UsersFixtures::class
        ];
    }
}
