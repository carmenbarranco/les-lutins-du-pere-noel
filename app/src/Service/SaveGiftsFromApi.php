<?php

namespace App\Service;

use App\Entity\Gift;
use App\Entity\GiftCode;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use League\Csv\Reader;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class SaveGiftsFromApi {
    private $notifier;
    private $translator;
    private $encoder;
    private $em;

    public function __construct(NotifierInterface $notifier, EntityManagerInterface $em, TranslatorInterface
    $translator,  UserPasswordHasherInterface $encoder)
    {
        $this->notifier = $notifier;
        $this->em = $em;
        $this->translator = $translator;
        $this->encoder = $encoder;
    }

    /**
     */
    public function saveDatas($filePath, $factory)
    {
        $csv = Reader::createFromPath($filePath)->setHeaderOffset(0);
        $i = 0;
        foreach ($csv as $gift) {
            $i++;
            $newGitf = new Gift();
            $client = $this->em->getRepository(User::class)->findBy(['email' => $gift['Mail Client']]);
            if ($client) {
                $newGitf->setReceiver($client[0]);
            } else {
                $newReceiver = new User();
                $newReceiver->setLastName($gift['Prénom Client']);
                $newReceiver->setFirstName($gift['Nom Client']);
                $newMail = strtolower($gift['Prénom Client'].$gift['Nom Client'].'_'.$i);
                $newReceiver->setEmail($newMail.'@les-lutins-pere-noel.fr');
                $newReceiver->setPhone($gift['Télephone Client']);
                $newReceiver->setRoles(['ROLE_RECEIVER', 'ROLE_USER']);
                $newReceiver->isVerified(1);
                $newReceiver->setPassword($this->encoder->hashPassword($newReceiver, 'totototo'));
                $codePays = explode('/', $gift['Pays']);
                $newReceiver->setCountryCode($codePays[1]);
                $this->em->persist($newReceiver);
                $newGitf->setReceiver($newReceiver);
            }

            $newGitf->setName($gift['Jouet']);
            $newGitf->setDescription($gift['Description']);
            $newGitf->setPrice((float)$gift['Prix']);
            $code = $this->em->getRepository(GiftCode::class)->findBy(['code' => $gift['Code']]);
            $newGitf->setCode($code[0]);
            $newGitf->setFromFile(1);
            $newGitf->setFactoryGifts($factory);

            $this->em->persist($newGitf);
        }
        $this->em->flush();
    }
}