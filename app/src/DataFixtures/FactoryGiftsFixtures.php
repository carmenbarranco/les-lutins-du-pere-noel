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
        $numbers = range(2, 12);
        shuffle($numbers);
        $id = array_slice($numbers, 0, 20);
        for($factoriesNb = 1; $factoriesNb <= 20; $factoriesNb++){
            $user = null;
            if (array_key_exists($factoriesNb, $id)) {
                $user = $this->getReference('user_'. $id[$factoriesNb]);
            }
            $factoryGifts = new FactoryGifts();
            $factoryGifts->setAddress($faker->address);
            if ($user) {
                $factoryGifts->addUser($user);
            }
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
