<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class ContactController
{
    /**
     * @param Environment $twig
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */

    public function contact(Environment $twig): Response
    {
        return new Response(
            $twig->render('contact.html.twig')
        );
    }
}
