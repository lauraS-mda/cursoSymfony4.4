<?php

namespace App\Controller\ApiController;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Extensions\UserUtilitiesTrait;
use App\Entity\Usuarios;

class UsuarioController extends AbstractFOSRestController{

    use UserUtilitiesTrait;

    /**
     * @Route("/usuario", name="usuario")
     */
    public function index(): Response
    {
        return $this->render('usuario/index.html.twig', [
            'controller_name' => 'UsuarioController',
        ]);
    }

    /**
     * @Route("/usuario/login", name="usuario_login")
     */
    public function login(): Response
    {
        return $this->render('usuario/login.html.twig', [
            'controller_name' => 'UsuarioController',
        ]);
    }

    /**
     * @Rest\Get("/valida", name="api_valida_usuario")
     * @return Response
     */
    public function getValidaUsuario(Request $request) {
        
        
        
        $email=$request->request->get("email");
        $pass=$request->request->get("pass");
       // dd('valida '.$email.' pass '.$pass);
        $query=[
            'mail' => $email,
             'password' => $pass];
        $em = $this->getDoctrine()->getManager();
        $validaUsuario = $em->getRepository(Usuarios::class)->findBy($query);
        
        
        return $validaUsuario;
    }
}
