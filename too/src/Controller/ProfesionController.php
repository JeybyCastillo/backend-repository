<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Profesion;

class ProfesionController extends AbstractController
{
    //Obtener todas las profesiones
    #[Route('/profesion', name: 'app_profesion')]
    public function obtenerProfesiones(Request $request)
    {
        try{
            $em = $this->$this->getDoctrine()->getManager();

            $profesiones = em->getRepository(Profesion::class)->findAll();

            $data=['respuesta'=>'OK',
                    'lista_profesiones'=>'profesiones'];

            return new View($data, Response::HTTP_OK);


        }catch(\Exception $e){
            $view = [
                "code"=> 500,
                'content' => 'Ha ocurrido un error',
                'exception'=> [
                    'message' => $e->getMessage(),
                    'code' => $e->getStatusCode(),
                ]
                ];
                return new View($view, Response::HTTP_OK);
        }

    }
}
