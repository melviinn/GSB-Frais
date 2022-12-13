<?php

namespace App\Controller;

use App\Entity\Etat;
use App\Entity\FicheFrais;
use App\Entity\FraisForfait;
use App\Entity\LigneFraisForfait;
use App\Entity\LigneFraisHorsForfait;
use App\Form\FraisForfaitType;
use App\Form\FraisForfaitAllType;
use App\Form\FraisHorsForfaitType;
use App\Form\HorsClassType;
use App\Form\LigneFraisForfaitType;
use App\Repository\EtatRepository;
use App\Repository\FicheFraisRepository;
use App\Repository\FraisForfaitRepository;
use App\Repository\LigneFraisForfaitRepository;
use App\Repository\LigneFraisHorsForfaitRepository;
use ContainerWhD29kc\getUserInterfaceService;
use Doctrine\ORM\EntityManagerInterface;
use PhpParser\Node\Expr\Cast\String_;
use Stringable;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class FicheFraisController extends AbstractController
{
    public function renseigner(Request $request, EntityManagerInterface $entityManager, FraisForfaitRepository $fraisForfaitRepository, EtatRepository $etatRepository, FicheFraisRepository $ficheFraisRepository): Response
    {

        $fraisForfait = $fraisForfaitRepository->findAll();

        $ficheFrais = new FicheFrais();

        $user = $this->getUser();
        

        $form = $this->createForm(LigneFraisForfaitType::class, ['FraisForfait' => $fraisForfait] );
        $form->handleRequest($request);

        
        if ($form->isSubmitted() && $form->isValid()) {

            $moisData = $form->get('mois')->getData();
            $nbJustData = $form->get('nbJustificatifs')->getData();
            $montantTotalData = $form->get('montantValide')->getData();

            $ficheFrais->setIdVisiteur($user);
            $ficheFrais->setMois($moisData);
            $ficheFrais->setIdEtat($etatRepository->findOneBy(['id' => 'CR']));
            if ($nbJustData == null and $montantTotalData == null){

            } else {
                $ficheFrais->setNbJustificatifs($nbJustData);
                $ficheFrais->setMontantValide($montantTotalData);
            }
            
            $entityManager->persist($ficheFrais);
            $entityManager->flush();
            
            return $this->redirectToRoute('app_visu_frais', [], Response::HTTP_SEE_OTHER);
        }

        $ligneFraisHorsForfait = new LigneFraisHorsForfait();
        
        $form2 = $this->createForm(FraisHorsForfaitType::class, $ligneFraisHorsForfait);
        $form2->handleRequest($request);

        if ($form2->isSubmitted() && $form2->isValid()) {

            $ligneFraisHorsForfait->setIdVisiteur($user);
                        
            $entityManager->persist($ligneFraisHorsForfait);
            $entityManager->flush();

            return $this->redirectToRoute('app_visu_frais', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fiche_frais/renseigner.html.twig', [
            'form' => $form->createView(),
            'form2' => $form2->createView(),
            'fraisForfait' => $fraisForfait,

        ]);
    }

    public function visualiser(LigneFraisHorsForfaitRepository $ligneFraisHorsForfaitRepository, FraisForfaitRepository $fraisForfaitRepository, FicheFraisRepository $ficheFraisRepository): Response
    {
        $userId = $this->getUser()->getUserIdentifier();
        
        return $this->render('fiche_frais/visualiser.html.twig', [
            'hors_forfait' => $ligneFraisHorsForfaitRepository->findBy(['idVisiteur' => $userId]),
            'frais_forfait' => $fraisForfaitRepository->findAll(),
            'hors_class' => $ficheFraisRepository->findBy(['idVisiteur' => $userId]),
        ]);
    }
}
