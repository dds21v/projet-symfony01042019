<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/page/{id}", requirements={"id"="[0-9]+"}, name="app_blog")
     * @param int|null $id
     * @return Response
     */
    public function page(?int $id = null): Response
    {
        var_dump($id);
        return $this->render('blog.html.twig');
    }

    public function page2(?string $id = null): Response
    {
        return $this->render('blog.html.twig');
    }

    /**
     * @Route("/page3/{id<[0-9]+>}", methods={"GET"}, name="app_blog_3")
     * @param int|null $id
     * @return Response
     */
    public function page3(?int $id = null): Response
    {
        return $this->render('blog.html.twig');
    }

    /**
     * @Route("/api/product")
     * @return JsonResponse
     */
    public function displayJson(): JsonResponse
    {
        $product = [
            "id" => 1,
            "name" => 'hamac',
            "price" => 10.55
        ];

        return $this->json($product);
    }
}