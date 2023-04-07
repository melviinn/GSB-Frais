<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // On obtient les erreurs d'authentification s'il y en a
        $error = $authenticationUtils->getLastAuthenticationError();
        // Dernier login utilisé
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('accueil/visiteur.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    #[Route(path: '/loginComptable', name: 'app_login_comptable')]
    public function loginComptable(AuthenticationUtils $authenticationUtils): Response
    {
        // On obtient les erreurs d'authentification s'il y en a
        $error = $authenticationUtils->getLastAuthenticationError();
        // Dernier login utilisé
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/loginComptable.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error]);
    }
}
