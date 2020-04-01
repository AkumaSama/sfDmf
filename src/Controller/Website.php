<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Website extends AbstractController
{
  public function index() {
    return $this->render('accueil/accueil.html.twig');
  }
}
