<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProfesionRepository;
use App\Entity\Profesion;

class ProfesionController extends AbstractController
{
    //Obtener todas las profesiones
    #[Route('/profesiones', name: 'app_profesion')]
    public function obtenerProfesiones(Request $request, ProfesionRepository $profesionRepository)
    {
            $profesiones = $profesionRepository->findAll(); //trae todas las profesiones
            $profesionesArray = [];

            //recorrer todos los datos
            foreach ($profesiones as $profesion){
                $profesionesArray[]=[
                    //recoger nombre
                    'nombre_profesion' => $profesion->getNombreProfesion()
                ];
            };

            //pasarlo como json
            $response = new JsonResponse();
            //enviar la data
            $response->setData([
                'success' => true,
                'data' => $profesionesArray
            ]);

            //retornar los datos
            return $response;
    }
}
