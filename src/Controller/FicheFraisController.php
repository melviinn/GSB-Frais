<?php

namespace App\Controller;

use App\Entity\FicheFrais;
use App\Entity\LigneFraisForfait;
use App\Entity\LigneFraisHorsForfait;
use App\Form\ChoixMoisVisualiserType;
use App\Form\FraisHorsForfaitType;
use App\Form\LigneFraisForfaitType;
use App\Repository\EtatRepository;
use App\Repository\FicheFraisRepository;
use App\Repository\FraisForfaitRepository;
use App\Repository\LigneFraisForfaitRepository;
use App\Repository\LigneFraisHorsForfaitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FicheFraisController extends AbstractController
{
    public function renseigner(Request $request, EntityManagerInterface $entityManager, FraisForfaitRepository $fraisForfaitRepository, EtatRepository $etatRepository, LigneFraisForfaitRepository $ligneFraisForfaitRepository, FicheFraisRepository $ficheFraisRepository): Response
    {

        $ficheFrais = new FicheFrais();
        $user = $this->getUser();

        $form = $this->createForm(LigneFraisForfaitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $moisData = $form->get('mois')->getData();
            $montantKM = $form->get('montantKM')->getData();
            $montantETP = $form->get('montantETP')->getData();
            $montantREP = $form->get('montantREP')->getData();
            $montantNUI = $form->get('montantNUI')->getData();
            $KM = $fraisForfaitRepository->findOneBy(['id' => 'KM']);
            $ETP = $fraisForfaitRepository->findOneBy(['id' => 'ETP']);
            $REP = $fraisForfaitRepository->findOneBy(['id' => 'REP']);
            $NUI = $fraisForfaitRepository->findOneBy(['id' => 'NUI']);
            $montantTotal = $form->get('montantKM')->getData()*0.62 +
                            $form->get('montantETP')->getData()*110 +
                            $form->get('montantNUI')->getData()*80 +
                            $form->get('montantREP')->getData()*25;
            if ($montantKM){
                $ligneFraisForfait = new LigneFraisForfait();
                $ligneFraisForfait->setIdVisiteur($user);
                $ligneFraisForfait->setIdFraisForfait($KM);
                $ligneFraisForfait->setQuantite($montantKM);
                $ligneFraisForfait->setMois($moisData);
                $entityManager->persist($ligneFraisForfait);
                $entityManager->flush();
                if ($montantREP){
                    $ligneFraisForfait = new LigneFraisForfait();
                    $ligneFraisForfait->setIdVisiteur($user);
                    $ligneFraisForfait->setIdFraisForfait($REP);
                    $ligneFraisForfait->setQuantite($montantREP);
                    $ligneFraisForfait->setMois($moisData);
                    $entityManager->persist($ligneFraisForfait);
                    $entityManager->flush();
                    if ($montantNUI){
                        $ligneFraisForfait = new LigneFraisForfait();
                        $ligneFraisForfait->setIdVisiteur($user);
                        $ligneFraisForfait->setIdFraisForfait($NUI);
                        $ligneFraisForfait->setQuantite($montantNUI);
                        $ligneFraisForfait->setMois($moisData);
                        $entityManager->persist($ligneFraisForfait);
                        $entityManager->flush();
                        if ($montantETP){
                            $ligneFraisForfait = new LigneFraisForfait();
                            $ligneFraisForfait->setIdVisiteur($user);
                            $ligneFraisForfait->setIdFraisForfait($ETP);
                            $ligneFraisForfait->setQuantite($montantETP);
                            $ligneFraisForfait->setMois($moisData);
                            $entityManager->persist($ligneFraisForfait);
                            $entityManager->flush();
                        }
                    } else if ($montantETP){
                        $ligneFraisForfait = new LigneFraisForfait();
                        $ligneFraisForfait->setIdVisiteur($user);
                        $ligneFraisForfait->setIdFraisForfait($ETP);
                        $ligneFraisForfait->setQuantite($montantETP);
                        $ligneFraisForfait->setMois($moisData);
                        $entityManager->persist($ligneFraisForfait);
                        $entityManager->flush();
                    }
                } else if ($montantNUI){
                    $ligneFraisForfait = new LigneFraisForfait();
                    $ligneFraisForfait->setIdVisiteur($user);
                    $ligneFraisForfait->setIdFraisForfait($NUI);
                    $ligneFraisForfait->setQuantite($montantNUI);
                    $ligneFraisForfait->setMois($moisData);
                    $entityManager->persist($ligneFraisForfait);
                    $entityManager->flush();
                    if ($montantETP){
                        $ligneFraisForfait = new LigneFraisForfait();
                        $ligneFraisForfait->setIdVisiteur($user);
                        $ligneFraisForfait->setIdFraisForfait($ETP);
                        $ligneFraisForfait->setQuantite($montantETP);
                        $ligneFraisForfait->setMois($moisData);
                        $entityManager->persist($ligneFraisForfait);
                        $entityManager->flush();
                    }
                } else if ($montantETP){
                    $ligneFraisForfait = new LigneFraisForfait();
                    $ligneFraisForfait->setIdVisiteur($user);
                    $ligneFraisForfait->setIdFraisForfait($ETP);
                    $ligneFraisForfait->setQuantite($montantETP);
                    $ligneFraisForfait->setMois($moisData);
                    $entityManager->persist($ligneFraisForfait);
                    $entityManager->flush();
                }
            } else if ($montantREP){
                $ligneFraisForfait = new LigneFraisForfait();
                $ligneFraisForfait->setIdVisiteur($user);
                $ligneFraisForfait->setIdFraisForfait($REP);
                $ligneFraisForfait->setQuantite($montantREP);
                $ligneFraisForfait->setMois($moisData);
                $entityManager->persist($ligneFraisForfait);
                $entityManager->flush();
                if ($montantNUI){
                    $ligneFraisForfait = new LigneFraisForfait();
                    $ligneFraisForfait->setIdVisiteur($user);
                    $ligneFraisForfait->setIdFraisForfait($NUI);
                    $ligneFraisForfait->setQuantite($montantNUI);
                    $ligneFraisForfait->setMois($moisData);
                    $entityManager->persist($ligneFraisForfait);
                    $entityManager->flush();
                    if ($montantETP){
                        $ligneFraisForfait = new LigneFraisForfait();
                        $ligneFraisForfait->setIdVisiteur($user);
                        $ligneFraisForfait->setIdFraisForfait($ETP);
                        $ligneFraisForfait->setQuantite($montantETP);
                        $ligneFraisForfait->setMois($moisData);
                        $entityManager->persist($ligneFraisForfait);
                        $entityManager->flush();
                    }
                } else if ($montantETP){
                    $ligneFraisForfait = new LigneFraisForfait();
                    $ligneFraisForfait->setIdVisiteur($user);
                    $ligneFraisForfait->setIdFraisForfait($ETP);
                    $ligneFraisForfait->setQuantite($montantETP);
                    $ligneFraisForfait->setMois($moisData);
                    $entityManager->persist($ligneFraisForfait);
                    $entityManager->flush();
                }
            } else if ($montantNUI){
                $ligneFraisForfait = new LigneFraisForfait();
                $ligneFraisForfait->setIdVisiteur($user);
                $ligneFraisForfait->setIdFraisForfait($NUI);
                $ligneFraisForfait->setQuantite($montantNUI);
                $ligneFraisForfait->setMois($moisData);
                $entityManager->persist($ligneFraisForfait);
                $entityManager->flush();
                if ($montantETP){
                    $ligneFraisForfait = new LigneFraisForfait();
                    $ligneFraisForfait->setIdVisiteur($user);
                    $ligneFraisForfait->setIdFraisForfait($ETP);
                    $ligneFraisForfait->setQuantite($montantETP);
                    $ligneFraisForfait->setMois($moisData);
                    $entityManager->persist($ligneFraisForfait);
                    $entityManager->flush();
                }
            } else if ($montantETP){
                $ligneFraisForfait = new LigneFraisForfait();
                $ligneFraisForfait->setIdVisiteur($user);
                $ligneFraisForfait->setIdFraisForfait($ETP);
                $ligneFraisForfait->setQuantite($montantETP);
                $ligneFraisForfait->setMois($moisData);
                $entityManager->persist($ligneFraisForfait);
                $entityManager->flush();
            }
            if (count($ficheFraisRepository->findBy(['mois' => $moisData,])) < 1){
                $ficheFrais->setIdVisiteur($user);
                $ficheFrais->setIdEtat($etatRepository->findOneBy(['id' => 'CR']));
                $ficheFrais->setMois($moisData);
                $ficheFrais->setNbJustificatifs(count($ligneFraisForfaitRepository->findBy(['mois' => $moisData])));
                $ficheFrais->setMontantValide($montantTotal);
                $entityManager->persist($ficheFrais);
                $entityManager->flush();
            } else {
                $entityManager->persist($ligneFraisForfait);
                $entityManager->flush();
            }
            return $this->redirectToRoute('app_renseigner_frais', [], Response::HTTP_SEE_OTHER);
        }

        $ligneFraisHorsForfait = new LigneFraisHorsForfait();

        $form2 = $this->createForm(FraisHorsForfaitType::class, $ligneFraisHorsForfait);
        $form2->handleRequest($request);

        if ($form2->isSubmitted() && $form2->isValid()) {

            $ligneFraisHorsForfait->setIdVisiteur($user);

            $entityManager->persist($ligneFraisHorsForfait);
            $entityManager->flush();

            return $this->redirectToRoute('app_renseigner_frais', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fiche_frais/renseigner.html.twig', [
            'form' => $form->createView(),
            'form2' => $form2->createView()
        ]);
    }

    public function visualiser(Request $request, LigneFraisHorsForfaitRepository $ligneFraisHorsForfaitRepository, FraisForfaitRepository $fraisForfaitRepository, 
    FicheFraisRepository $ficheFraisRepository, LigneFraisForfaitRepository $ligneFraisForfaitRepository, EntityManagerInterface $em): Response
    {
        $userId = $this->getUser()->getUserIdentifier();

        $form = $this->createForm(ChoixMoisVisualiserType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $mois = $form->get('mois')->getData();

            return $this->redirectToRoute('app_visu_frais', ['mois' => $mois], Response::HTTP_SEE_OTHER);
        }

        $mois = $request->get('mois');

        $hors_forfait = $ligneFraisHorsForfaitRepository->findBy(['idVisiteur' => $userId]);
        $ligne_frais_forfait = $ligneFraisForfaitRepository->findBy(['idVisiteur' => $userId, 'mois' => $mois]);
        $fiche_frais = $ficheFraisRepository->findBy(['idVisiteur' => $userId, 'mois' => $mois]);
        $KM = $fraisForfaitRepository->findOneBy(['id' => 'KM']);
        $NUI = $fraisForfaitRepository->findOneBy(['id' => 'NUI']);
        $ETP = $fraisForfaitRepository->findOneBy(['id' => 'ETP']);
        $REP = $fraisForfaitRepository->findOneBy(['id' => 'REP']);

        return $this->render('fiche_frais/visualiser.html.twig', [
            'hors_forfait' => $hors_forfait,
            'ligne_frais_forfait' => $ligne_frais_forfait,
            'fiche_frais' => $fiche_frais,
            'KM' => $KM,
            'NUI' => $NUI,
            'ETP' => $ETP,
            'REP' => $REP,
            'form' => $form->createView(),
        ]);
    }
}
