<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/languages")
     * @return JsonResponse
     */
    public function api(): JsonResponse
    {
        $languages = ['HTML', 'CSS', 'JS', 'PHP'];
        return $this->json($languages);
    }
}
