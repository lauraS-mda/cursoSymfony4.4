<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class Ejercicio2Controller extends AbstractController
{
    /**
     * @Route("/ejercicio2", name="ejercicio2")
     */
    public function index(): Response
    {
        return $this->render('ejercicio2/index.html.twig', [
            'controller_name' => 'Ejercicio2Controller',
        ]);
    }

    /**
     * @Route("/ejercicio2/puntoa", name="ejercicio2_puntoa")
     */
    public function ejercicio_puntoa(): Response
    {

        return $this->render('ejercicio2/puntoa.html.twig');
    }

    /**
     * @Route("/ejercicio2/puntob/{var}", name="ejercicio2_puntob")
     */
    public function ejercicio2_puntob($var): Response
    {   
        if($var != 0) {
        $respuesta='Correcto';
        } else { $respuesta='InCorrecto';}
       // $var='';
        return $this->render('ejercicio2/puntob.html.twig',[
        'respuesta' => $respuesta,
        'var' => $var
        ]);
    }

   
}
