<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    public function visiteur(AuthenticationUtils $authenticationUtils): Response 
    {
        return $this->render('login/visiteur.html.twig');
    }
      
    public function comptable(AuthenticationUtils $authenticationUtils): Response 
    {
        
        return $this->render('login/comptable.html.twig');
    }

    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}