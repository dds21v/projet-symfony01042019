<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController extends AbstractController
{
    /**
     * @return Response
     */
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }
}
