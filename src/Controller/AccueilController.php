<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    public function accueilVisiteur(): Response
    {
        return $this->render('accueil/index.html.twig');
    }

    public function accueilComptable(): Response
    {
        return $this->render('accueil/indexComptable.html.twig');
    }
}
