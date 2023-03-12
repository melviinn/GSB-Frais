<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AccueilController extends AbstractController
{
    // Accueil Visiteur
    public function accueilVisiteur(): Response
    {
        return $this->render('accueil/visiteur.html.twig');
    }

    // Accueil Comptable
    public function accueilComptable(): Response
    {
        return $this->render('accueil/comptable.html.twig');
    }
}
