<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SemController extends AbstractController
{
    #[Route('/sem', name: 'app_sem')]
    public function index(): Response
    {
        return $this->render('sem/index.html.twig', [
            'controller_name' => 'SemController',
        ]);
    }
}
