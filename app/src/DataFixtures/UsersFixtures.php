<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UsersFixtures extends Fixture
{
    private UserPasswordHasherInterface $encoder;
    private $faker;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
        $this->faker = Factory::create("fr_FR");
    }

    public function load(ObjectManager $manager)
    {
        for ($nbUsers = 1; $nbUsers <= 20; $nbUsers++) {
            $user = new User();
            $user->setEmail($this->faker->email);
            if ($nbUsers === 1) {
                $user->setRoles(['ROLE_SANTA', 'ROLE_USER']);
                $user->setEmail('perenoel@les-lutins-du-pere-noel.fr');
                $this->addReference('user_' . $nbUsers, $user);
            } elseif (2 <= $nbUsers && $nbUsers <= 6) {
                $user->setRoles(['ROLE_CHIEF', 'ROLE_USER']);
                $user->setEmail('chef'.$nbUsers.'@les-lutins-du-pere-noel.fr');
                $this->addReference('user_' . $nbUsers, $user);
            } elseif (6 <= $nbUsers && $nbUsers <= 13) {
                $user->setRoles(['ROLE_ELVES', 'ROLE_USER']);
                $user->setEmail('lutin'.$nbUsers.'@les-lutins-du-pere-noel.fr');
                $this->addReference('user_' . $nbUsers, $user);
            } else {
                $user->setRoles(['ROLE_RECEIVER', 'ROLE_USER']);
                $user->setEmail('receiver'.$nbUsers.'@les-lutins-du-pere-noel.fr');
                $this->addReference('user_' . $nbUsers, $user);
            }
            $user->setPassword($this->encoder->hashPassword($user, 'totototo'));
            $user->setFirstName($this->faker->firstName);
            $user->setLastName($this->faker->lastName);
            $user->setIsVerified( 1);
            $user->setCountryCode($this->faker->countryCode);
            $user->setPhone($this->faker->phoneNumber);
            $manager->persist($user);
        }
        $manager->flush();
    }
}
