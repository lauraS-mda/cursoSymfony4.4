<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\ApiController\UsuarioController;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index(): Response
    {
        return $this->render('login/login.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    /**
     * @Route("/login/validausu", name="login_validausu")
     */

    public function validaUsu(Request $request,UsuarioController $usuario): Response
    {
        
        $ok=$usuario->getValidaUsuario($request); 
        if ($ok != null) { $respuesta='Usuario Valido';} else { $respuesta='Usuario Incorrecto';}
       
        return $this->render('login/login.html.twig', [
           'respuesta' => $respuesta
        ]);
    }    
}
