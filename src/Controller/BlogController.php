<?php


namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/page/{id}/", name="app_blog")
     * @return Response
     */
    public function page(): Response
    {
        return $this->render('blog.html.twig');
    }
}