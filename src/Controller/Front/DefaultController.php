<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'app_front_')]
class DefaultController extends AbstractController
{
    #[Route('', name: 'home')]
    public function home(): Response
    {
        return $this->render('front/default/home.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
