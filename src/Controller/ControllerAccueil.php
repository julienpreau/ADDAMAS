<?php
//src/Controller/ControllerAccueil.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerAccueil
{
    /**
     * @Route("/accueil")
     */
    public function showAction()
    {
        return new Response('Bienvenue sur le site de la société ADDAMAS');
    }
}