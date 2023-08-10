<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MeSController extends AbstractController
{
    #[Route('/me/s', name: 'app_me_s')]
    public function index(): Response
    {
        return $this->render('me_s/index.html.twig', [
            'controller_name' => 'MeSController',
        ]);
    }
}
