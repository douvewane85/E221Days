<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * @Route("/security")
     */
class SecurityController extends AbstractController
{
    /**
     * @Route("/login/{nom}/{prenom?}", name="security-login")
     */
    public function login($nom,$prenom): Response
    {
       // $nom="Diop";
      
       if(empty($prenom)){
              $prenom="Modou";
       }
        return $this->render('security/login.html.twig', [
            'nom' => $nom,
            "prenom"=>$prenom
        ]);
    }

    /**
     * @Route("/register", name="security-register")
     */
    public function register(): Response
    {
        return $this->render('security/register.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }
}
