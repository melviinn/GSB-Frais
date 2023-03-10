<?php

namespace App\Controller;

use App\Entity\FicheFrais;
use App\Entity\LigneFraisForfait;
use App\Entity\LigneFraisHorsForfait;
use App\Form\ChoixMoisVisualiserType;
use App\Form\ChoixValidationFicheFraisType;
use App\Form\FraisHorsForfaitType;
use App\Form\LigneFraisForfaitType;
use App\Repository\EtatRepository;
use App\Repository\FicheFraisRepository;
use App\Repository\FraisForfaitRepository;
use App\Repository\LigneFraisForfaitRepository;
use App\Repository\LigneFraisHorsForfaitRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FicheFraisController extends AbstractController
{
    public function renseigner(Request $request, EntityManagerInterface $entityManager, FraisForfaitRepository $fraisForfaitRepository, EtatRepository $etatRepository, LigneFraisForfaitRepository $ligneFraisForfaitRepository, FicheFraisRepository $ficheFraisRepository): Response
    {
        // On créer une nouvelle instance de FicheFrais
        $ficheFrais = new FicheFrais();
        // On récupère l'id de l'utilisateur connecté
        $user = $this->getUser();

        // On créer le formulaire
        $form = $this->createForm(LigneFraisForfaitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // On récupère les données des champs du formulaire
            $moisData = $form->get('mois')->getData();
            $montantKM = $form->get('montantKM')->getData();
            $montantETP = $form->get('montantETP')->getData();
            $montantREP = $form->get('montantREP')->getData();
            $montantNUI = $form->get('montantNUI')->getData();
            // On récupère chaque ligne de FraisForfait
            $KM = $fraisForfaitRepository->findOneBy(['id' => 'KM']);
            $ETP = $fraisForfaitRepository->findOneBy(['id' => 'ETP']);
            $REP = $fraisForfaitRepository->findOneBy(['id' => 'REP']);
            $NUI = $fraisForfaitRepository->findOneBy(['id' => 'NUI']);
            // On calcule le montant total des FraisForfait
            $montantTotal = $form->get('montantKM')->getData()*0.62 +
                            $form->get('montantETP')->getData()*110 +
                            $form->get('montantNUI')->getData()*80 +
                            $form->get('montantREP')->getData()*25;
            // Conditions d'insertions des valeurs en fonction des champs renseignés ou non
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

            // On redirige après validation du formulaire
            return $this->redirectToRoute('app_renseigner_frais', [], Response::HTTP_SEE_OTHER);
        }

        // On créer une nouvelle instance de LigneFraisHorsForfait
        $ligneFraisHorsForfait = new LigneFraisHorsForfait();

        // On créer le formulaire
        $form2 = $this->createForm(FraisHorsForfaitType::class, $ligneFraisHorsForfait);
        $form2->handleRequest($request);

        if ($form2->isSubmitted() && $form2->isValid()) {

            // On set automatiquement  à LigneFraisHorsForfait l'idVisiteur avec l'id de l'utilisateur connecté
            $ligneFraisHorsForfait->setIdVisiteur($user);

            // On envoie les données vers la base
            $entityManager->persist($ligneFraisHorsForfait);
            $entityManager->flush();

            // On redirige après validation du formulaire
            return $this->redirectToRoute('app_renseigner_frais', [], Response::HTTP_SEE_OTHER);
        }

        // On passe les formulaires en paramètres afin de les afficher dans la vue
        return $this->render('fiche_frais/renseigner.html.twig', [
            'form' => $form->createView(),
            'form2' => $form2->createView()
        ]);
    }

    public function visualiser(Request $request, LigneFraisHorsForfaitRepository $ligneFraisHorsForfaitRepository, FraisForfaitRepository $fraisForfaitRepository, 
    FicheFraisRepository $ficheFraisRepository, LigneFraisForfaitRepository $ligneFraisForfaitRepository, EntityManagerInterface $em): Response
    {
        // On récupère l'id de l'utilisateur connecté
        $userId = $this->getUser()->getUserIdentifier();

        // On créer le formulaire
        $form = $this->createForm(ChoixMoisVisualiserType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // On récupère la valeur du champs 'mois' du formulaire
            $mois = $form->get('mois')->getData();

            // On redirige après validation du formulaire en passant le mois en paramètre
            return $this->redirectToRoute('app_visu_frais', ['mois' => $mois], Response::HTTP_SEE_OTHER);
        }
        // On récupère le mois passé en paramètre
        $mois = $request->get('mois');

        // On select les LigneFraisHorsForfait, LigneFraisForfait, FicheFrais en fonction de l'id du visiteur et du mois sélectionné
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

    public function choixValidation(Request $request): Response
    {
        // On créer le formulaire
        $form = $this->createForm(ChoixValidationFicheFraisType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // On récupère les données des champs du formulaire
            $mois = $form->get('mois')->getData();
            $idVisiteur = $form->get('idVisiteur')->getData();

            // On redirige après validation du formualire en passant les données en paramètre
            return $this->redirectToRoute('app_valider_frais', ['mois' => $mois, 'idVisiteur' => $idVisiteur], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fiche_frais/choixValidation.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function valider(Request $request, FicheFraisRepository $ficheFraisRepository, LigneFraisForfaitRepository $ligneFraisForfaitRepository,
    LigneFraisForfaitRepository $ligneFraisHorsForfaitRepository, UserRepository $userRepository): Response
    {
        // On récupère les données du formulaire précédent
        $mois = $request->get('mois');
        $idVisiteur = $request->get('idVisiteur');
        $prenomVisiteur = $userRepository->findOneBy(['id' => $idVisiteur])->getPrenom();

        // On select les FicheFrais, LigneFraisForfait et LigneFraisHorsForfait en fonction des données récupérées
        $ficheFrais = $ficheFraisRepository->findBy(['idVisiteur' => $idVisiteur, 'mois' => $mois]);
        $ligneFraisForfait = $ligneFraisForfaitRepository->findBy(['idVisiteur' => $idVisiteur, 'mois' => $mois]);
        $ligneFraisHorsForfait = $ligneFraisHorsForfaitRepository->findBy(['idVisiteur' => $idVisiteur]);

        return $this->render('fiche_frais/valider.html.twig', [
            'ficheFrais' => $ficheFrais,
            'ligneFraisForfait' => $ligneFraisForfait,
            'ligneFraisHorsForfait' => $ligneFraisHorsForfait,
            'mois' => $mois,
            'prenomVisiteur' => $prenomVisiteur
        ]);
    }
}
