<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DsiController extends AbstractController
{
    #[Route('/dsi', name: 'app_dsi')]
    public function index(): Response
    {
        return $this->render('dsi/index.html.twig', [
            'controller_name' => 'DsiController',
        ]);
    }
}
