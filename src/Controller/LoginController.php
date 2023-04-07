<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    // Login Visiteur
    public function visiteur(AuthenticationUtils $authenticationUtils): Response
    {
        // On obtient les différentes erreurs d'authentification pour les afficher dans la vue
        $error = $authenticationUtils->getLastAuthenticationError();
        return $this->render('login/visiteur.html.twig', [
            'error' => $error
        ]
    );
    }

    // Login Comptable
    public function comptable(AuthenticationUtils $authenticationUtils): Response
    {
        // On obtient les différentes erreurs d'authentification pour les afficher dans la vue
        $error = $authenticationUtils->getLastAuthenticationError();
        return $this->render('login/comptable.html.twig', [
            'error' => $error
        ]);
    }

    // Fonction se déconnecter
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}