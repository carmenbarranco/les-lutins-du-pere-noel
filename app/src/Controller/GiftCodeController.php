<?php

namespace App\Controller;

use App\Entity\GiftCode;
use App\Form\GiftCodeType;
use App\Repository\GiftCodeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/gift/code')]
class GiftCodeController extends AbstractController
{
    #[Route('/', name: 'gift_code_index', methods: ['GET'])]
    public function index(GiftCodeRepository $giftCodeRepository): Response
    {
        return $this->render('gift_code/index.html.twig', [
            'gift_codes' => $giftCodeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'gift_code_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $giftCode = new GiftCode();
        $form = $this->createForm(GiftCodeType::class, $giftCode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($giftCode);
            $entityManager->flush();

            return $this->redirectToRoute('gift_code_index');
        }

        return $this->render('gift_code/new.html.twig', [
            'gift_code' => $giftCode,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'gift_code_show', methods: ['GET'])]
    public function show(GiftCode $giftCode): Response
    {
        return $this->render('gift_code/show.html.twig', [
            'gift_code' => $giftCode,
        ]);
    }

    #[Route('/{id}/edit', name: 'gift_code_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, GiftCode $giftCode): Response
    {
        $form = $this->createForm(GiftCodeType::class, $giftCode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('gift_code_index');
        }

        return $this->render('gift_code/edit.html.twig', [
            'gift_code' => $giftCode,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'gift_code_delete', methods: ['POST'])]
    public function delete(Request $request, GiftCode $giftCode): Response
    {
        if ($this->isCsrfTokenValid('delete'.$giftCode->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($giftCode);
            $entityManager->flush();
        }

        return $this->redirectToRoute('gift_code_index');
    }
}
