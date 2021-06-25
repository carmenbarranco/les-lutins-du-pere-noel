<?php

namespace App\DataFixtures;

use App\Entity\GiftCode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GiftsCodeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $giftsCode = [
            1 => [
                'code' => 'grocery',
            ],
            2 => [
                'code' => 'car',
            ],
            3 => [
                'code' => 'sport',
            ],
            4 => [
                'code' => 'garden',
            ],
            5 => [
                'code' => 'game',
            ],
            6 => [
                'code' => 'animal',
            ],
            7 => [
                'code' => 'hardware',
            ],
        ];


        foreach($giftsCode as $key => $value){
            $code = new GiftCode();
            $code->setCode($value['code']);
            $manager->persist($code);
            // Enregistre le code dans une référence pour pouvoir le récuperer ensuite dans une autre fixture et
            // faire des relations
            $this->addReference('gifts_code' . $key, $code);
        }

        $manager->flush();
    }
}
