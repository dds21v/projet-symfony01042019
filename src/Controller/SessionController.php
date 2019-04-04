<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class SessionController extends AbstractController
{
    /**
     * @Route ("/session/ajout", name="app_session_ajout")
     * @param SessionInterface $session
     * @return Response
     */
    public function ajoutSession(SessionInterface $session): Response
    {
        //Ajout dans la session
        $ancienneValeur = $session->get('nbArticles', 0);
        $session->set('nbArticles', $ancienneValeur + 1);
        //Redirection dans la page d'accueil
        return $this->redirectToRoute('app_home');
    }

    /**
     * @Route("/panier", name="app_panier")
     * @param SessionInterface $session
     * @return Response
     */
    public function panier(SessionInterface $session): Response
    {
        //var_dump($session->get('nbArticles'));
        $nbArticles = $session->get('nbArticles', 0);

        return $this->render('panier.html.twig', [
            'nbArticles' => $nbArticles
        ]);
    }
}
