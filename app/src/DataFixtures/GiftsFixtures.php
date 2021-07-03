<?php

namespace App\DataFixtures;

use App\Entity\Gift;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class GiftsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for($giftsNb = 1; $giftsNb <= 100; $giftsNb++){
            $receiver = $this->getReference('user_'. $faker->numberBetween(11, 20));
            $factoryGifts = $this->getReference('factory_gifts_'. $faker->numberBetween(1, 20));
            $giftCode = $this->getReference('gifts_code'. $faker->numberBetween(1, 7));
            $gift = new Gift();
            $gift->setCode($giftCode);
            $gift->setReceiver($receiver);
            $gift->setFactoryGifts($factoryGifts);
            $gift->setName($faker->word);
            $gift->setDescription($faker->realText());
            $gift->setPrice($faker->randomFloat(2, 1, 60));
            $gift->setFromFile(0);
            $manager->persist($gift);
        }
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UsersFixtures::class,
            FactoryGiftsFixtures::class,
            GiftsCodeFixtures::class,
        ];
    }
}
