<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Rankings extends AbstractController
{
    /**
     * @Route("/familia/classement", name="classement-familia")
     */
    public function rankings() {
        return $this->render('classement-familia.html.twig');
    }
}
