<?php

namespace App\Controller;

use App\Service\SpreadSheetGifts;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\HeaderUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/exporter')]
class FilesController extends AbstractController
{

    private NotifierInterface $notifier;
    private EntityManagerInterface $em;
    private SpreadSheetGifts $spreadSheetGifts;

    public function __construct(NotifierInterface $notifier, EntityManagerInterface $em, SpreadSheetGifts $spreadSheetGifts)
    {
        $this->notifier = $notifier;
        $this->em = $em;
        $this->spreadSheetGifts = $spreadSheetGifts;
    }

    /**
     * Methods thats allow to save csv file's with spreadSheet via the service created for save files
     */
    #[Route('/', name: 'save_file', methods: ['POST'])]
    public function saveCsvGiftsFile(Request $request): Response
    {
        if ($request->isXmlHttpRequest()) {
            $this->spreadSheetGifts->export_cvs($request->get('columns'), $request->get('rows'), "les_cadeaux");
        }
        $response = new Response("'/var/www/app/public/uploads/les_cadeaux.csv'");
        $disposition = HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT,
            'les_cadeaux.csv'
        );

        $response->headers->set('Content-Disposition', $disposition);
        return $response;
    }
}
