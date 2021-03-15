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
}