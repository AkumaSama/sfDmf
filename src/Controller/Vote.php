<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Vote extends AbstractController
{
    /**
     * @Route("/vote", name="vote")
     */
    public function vote() {
        return $this->render('vote.html.twig');
    }
}
