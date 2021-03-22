<?php
//src/Controller/ADDAMASControllerHome.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ADDAMASControllerHome extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('home/home.html.twig');
    }

    /**
     * @Route("/historique")
     */
    public function historique()
    {
        return $this->render('home/historique.html.twig');
    }

    /**
     * @Route("/produits")
     */
    public function produits()
    {
        return $this->render('home/produits.html.twig');
    }

    /**
     * @Route("/espace")
     */
    public function espace()
    {
        return $this->render('home/espace.html.twig');
    }
}