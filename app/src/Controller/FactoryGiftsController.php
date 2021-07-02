<?php

namespace App\Controller;

use App\Entity\FactoryGifts;
use App\Form\FactoryGiftsType;
use App\Repository\FactoryGiftsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/usine')]
class FactoryGiftsController extends AbstractController
{
    private NotifierInterface $notifier;
    private EntityManagerInterface $em;

    public function __construct(NotifierInterface $notifier, EntityManagerInterface $em)
    {
        $this->notifier = $notifier;
        $this->em = $em;
    }

    #[Route('/', name: 'factory_gifts_index', methods: ['GET'])]
    public function index(factoryGiftsRepository $factoryGiftsRepository): Response
    {
        return $this->render('factoryGifts/index.html.twig', [
            'factories_gifts' => $factoryGiftsRepository->findAll(),
        ]);
    }
    #[Route('/lutins/{id}', name: 'factory_gifts_elves', methods: ['GET'])]
    public function indexLutins(FactoryGifts $factoryGifts): Response
    {
        // Get lutins by factory_gifts
        $elves = $factoryGifts->getUsers();
        return $this->render('factoryGifts/indexLutins.html.twig', [
            'elves' => $elves
        ]);
    }

    #[Route('/new', name: 'factory_gifts_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $factoryGifts = new FactoryGifts();
        $form = $this->createForm(FactoryGiftsType::class, $factoryGifts);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $this->em->persist($factoryGifts);
            $this->em->flush();

            return $this->redirectToRoute('factory_gifts_index');
        }

        return $this->render('factoryGifts/new.html.twig', [
            'factory_gifts' => $factoryGifts,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'factory_gifts_show', methods: ['GET'])]
    public function show(FactoryGifts $factoryGifts): Response
    {
        return $this->render('factoryGifts/show.html.twig', [
            'factory_gifts' => $factoryGifts,
        ]);
    }

    #[Route('/{id}/edit', name: 'factory_gifts_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FactoryGifts $factoryGifts): Response
    {
        $form = $this->createForm(FactoryGiftsType::class, $factoryGifts);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('factory_gifts_index');
        }

        return $this->render('factoryGifts/edit.html.twig', [
            'factory_gifts' => $factoryGifts,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'factory_gifts_delete', methods: ['POST'])]
    public function delete(Request $request, FactoryGifts $factoryGifts): Response
    {
        if ($this->isCsrfTokenValid('delete'.$factoryGifts->getId(), $request->request->get('_token'))) {
            
            $this->em->remove($factoryGifts);
            $this->em->flush();
        }

        return $this->redirectToRoute('factory_gifts_index');
    }
}
