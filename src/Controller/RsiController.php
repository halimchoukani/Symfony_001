<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RsiController extends AbstractController
{
    #[Route('/rsi', name: 'app_rsi')]
    public function index(): Response
    {
        return $this->render('rsi/index.html.twig', [
            'controller_name' => 'RsiController',
        ]);
    }
}
