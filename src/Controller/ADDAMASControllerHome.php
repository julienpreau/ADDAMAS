<?php
//src/Controller/ADDAMASControllerHome.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ADDAMASControllerHome
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return new Response('Bienvenue sur le site de la société ADDAMAS');
    }
}