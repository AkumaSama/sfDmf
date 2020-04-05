<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Shop extends AbstractController
{
    /**
     * @Route("/shop", name="shop")
     */
    public function shop() {
        return $this->render('shop.html.twig');
    }
}
