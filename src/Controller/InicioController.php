<?php

namespace App\Controller;

use App\Entity\Lenguajes;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InicioController extends AbstractController
{
    #[Route('/', name: 'app_inicio')]
    public function index(EntityManagerInterface $em): Response
    {   $arraySelected = [];
        $consulta =  $em->getRepository(Lenguajes::class)->findAll();

        for ($i=0; $i < 3; $i++) {
            $random = rand(0,count($consulta)-1);
            if (array_key_exists($random, $arraySelected)) {
                $i--;
                continue;
            }
            $arraySelected[$random] = $consulta[$random];
        }
        return $this->render('inicio/index.html.twig',[
            "resultados" => $arraySelected
        ]);
    }

    #[Route('/lenguajes', name: 'app_lenguajes')]
    public function lenguajes(EntityManagerInterface $em): Response
    {
        $consulta =  $em->getRepository(Lenguajes::class)->findAll();
        return $this->render('inicio/lenguajes.html.twig',[
            "resultados" => $consulta
        ]);
    }

    #[Route('/lenguajes/{id}', name: 'app_lenguajesexpe')]
    public function lenguajesexpe(EntityManagerInterface $em, $id): Response
    {
        $consulta =  $em->getRepository(Lenguajes::class)->find($id);
        return $this->render('inicio/lenguajesEspecificos.html.twig',[
            "resultado" => $consulta
        ]);
    }
}
