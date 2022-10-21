<?php

namespace App\Controller;

use App\Entity\FicheFrais;
use App\Form\FicheFraisType;
use App\Form\RenseignerFicheFraisFormType;
use App\Repository\FicheFraisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FicheFraisController extends AbstractController
{
    #[Route('/fiche/frais', name: 'app_fiche_frais')]
    public function renseigner(Request $request, FicheFraisRepository $ficheFraisRepository, EntityManagerInterface $entityManager): Response
    {
        $ficheFrais = new FicheFrais();
        $form = $this->createForm(RenseignerFicheFraisFormType::class, $ficheFrais);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $entityManager->persist($ficheFrais);
            $entityManager->flush();

            return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fiche_frais/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
