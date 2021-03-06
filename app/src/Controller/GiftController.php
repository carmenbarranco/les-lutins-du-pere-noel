<?php

namespace App\Controller;

use App\Entity\FactoryGifts;
use App\Entity\Gift;
use App\Form\FactoryGiftsCsvType;
use App\Form\GiftType;
use App\Repository\FactoryGiftsRepository;
use App\Repository\GiftRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cadeaux')]
class GiftController extends AbstractController
{

    private NotifierInterface $notifier;
    private EntityManagerInterface $em;

    public function __construct(NotifierInterface $notifier, EntityManagerInterface $em)
    {
        $this->notifier = $notifier;
        $this->em = $em;
    }

    #[Route('/', name: 'gift_index', methods: ['GET'])]
    public function index(GiftRepository $giftRepository): Response
    {
        $gifts = "";
        //show diffents gifts according to roles
        if ($this->isGranted('ROLE_CHIEF') || $this->isGranted('ROLE_ELVES')) {
            $factoryId = $this->getUser()->getFactoryGifts();
            $gifts = $giftRepository->findBy(["factoryGifts" => $factoryId]);
            $factory = $this->em->find(FactoryGifts::class, $factoryId);
            $form = $this->createForm(FactoryGiftsCsvType::class, $factory);
        } elseif ($this->isGranted('ROLE_RECEIVER')) {
            $gifts = $giftRepository->findBy(['receiver' => $this->getUser()->getId()]);
        }

        return $this->render('gift/index.html.twig', [
            'gifts' => $gifts,
            'formCsv' => $form ? $form->createView() : null
        ]);
    }

    #[Route('/stocks', name: 'gift_index_by_factory', methods: ['GET'])]
    public function indexByFactory(FactoryGiftsRepository $factoryGiftRepo): Response
    {
        // This is the views for Santa (stock by factory)
        $factories = $factoryGiftRepo->findAll();

        return $this->render('gift/indexByFactory.html.twig', [
            'factories' => $factories,
        ]);
    }

    #[Route('/new', name: 'gift_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $gift = new Gift();
        $form = $this->createForm(GiftType::class, $gift);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $gift->setFromFile(0);
            $factory = $this->em->find(FactoryGifts::class, $this->getUser()->getFactoryGifts()->getId());
            $gift->setFactoryGifts($factory);
            $this->em->persist($gift);
            $this->em->flush();

            return $this->redirectToRoute('gift_index');
        }

        return $this->render('gift/new.html.twig', [
            'gift' => $gift,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'gift_show', methods: ['GET'])]
    public function show(Gift $gift): Response
    {
        return $this->render('gift/show.html.twig', [
            'gift' => $gift,
        ]);
    }

    #[Route('/{id}/edit', name: 'gift_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Gift $gift): Response
    {
        $form = $this->createForm(GiftType::class, $gift);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();

            return $this->redirectToRoute('gift_index');
        }

        return $this->render('gift/edit.html.twig', [
            'gift' => $gift,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'gift_delete', methods: ['POST'])]
    public function delete(Request $request, Gift $gift): Response
    {
        if ($this->isCsrfTokenValid('delete' . $gift->getId(), $request->request->get('_token'))) {
            $this->em->remove($gift);
            $this->em->flush();
        }

        return $this->redirectToRoute('gift_index');
    }
}
