<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AccueilController extends AbstractController
{
    public function accueilVisiteur(): Response
    {
        return $this->render('accueil/visiteur.html.twig');
    }

    public function accueilComptable(): Response
    {
        return $this->render('accueil/comptable.html.twig');
    }
}
