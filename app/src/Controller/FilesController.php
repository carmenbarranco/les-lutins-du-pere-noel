<?php

namespace App\Controller;

use App\Services\SpreadSheetGifts;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     * @throws Exception
     */
    #[Route('/', name: 'save_file', methods: ['POST'])]
    public function saveCsvGiftsFile(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            return $this->spreadSheetGifts->export_cvs($request->get('columns'), $request->get('rows'), "les_cadeaux");
        } else {
            return $this->redirectToRoute('gift_index');
        }
    }
}
