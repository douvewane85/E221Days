<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/front/catalogue", name="front-catalogue")
     */
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/front/details", name="front-detail")
     */
    public function detail_bien(): Response
    {
        return $this->render('front/detail.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
}
