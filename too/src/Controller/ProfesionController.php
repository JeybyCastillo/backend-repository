<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfesionController extends AbstractController
{
    #[Route('/profesion', name: 'app_profesion')]
    public function index(): Response
    {
        return $this->render('profesion/index.html.twig', [
            'controller_name' => 'ProfesionController',
        ]);
    }
}
