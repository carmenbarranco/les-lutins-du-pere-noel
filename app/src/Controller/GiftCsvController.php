<?php

namespace App\Controller;

use App\Entity\FactoryGifts;
use App\Entity\GiftsFiles;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

#[AsController]
final class GiftCsvController extends AbstractController
{
    private FileUploader $fileUploader;
    /**
     * @var EntityManagerInterface
     */
    private  $em;

    public function __construct(EntityManagerInterface $em, FileUploader $fileUploader)
    {
        $this->fileUploader = $fileUploader;
        $this->em = $em;
    }

    public function __invoke(Request $request): GiftsFiles
    {
        $uploadedFile = $request->files->get('file');
        if (!$uploadedFile) {
            throw new BadRequestHttpException('"file" is required');
        }

        $nameFile = $this->fileUploader->upload($uploadedFile);

        $newCsvFile = new GiftsFiles();
        $newCsvFile->setName($nameFile);
        $factoryId = $this->em->find(FactoryGifts::class, $request->get('factoryId'));
        $newCsvFile->setFactoryGifts($factoryId);


        return $newCsvFile;
    }
}