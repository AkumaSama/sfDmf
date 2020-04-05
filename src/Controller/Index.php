<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Index extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('accueil/accueil.html.twig');
    }

    /**
     * @Route("/rejoindre", name="rejoindre")
     */
    public function join()
    {
        return $this->render('nous-rejoindre.html.twig');
    }
}
