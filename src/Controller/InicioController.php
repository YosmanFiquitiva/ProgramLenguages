<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InicioController extends AbstractController
{
    #[Route('/', name: 'app_inicio')]
    public function index(): Response
    {
        return $this->render('inicio/index.html.twig');
    }

    #[Route('/lenguajes', name: 'app_lenguajes')]
    public function lenguajes(): Response
    {
        return $this->render('inicio/lenguajes.html.twig');
    }
}
