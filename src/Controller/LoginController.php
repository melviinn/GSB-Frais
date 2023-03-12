<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends AbstractController
{
    // Login Visiteur
    public function visiteur(): Response
    {
        return $this->render('login/visiteur.html.twig');
    }

    // Login Comptable
    public function comptable(): Response
    {
        return $this->render('login/comptable.html.twig');
    }

    // Fonction se déconnecter
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}