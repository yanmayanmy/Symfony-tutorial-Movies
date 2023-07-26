<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        $movies = ["Howl's Moving Castle", "Spirited Away"];
        $dramas = ["Orange is the New Black", "Move to Heaven"];

        return $this->render('index.html.twig', array(
            'movies' => $movies,
            'dramas' => $dramas,
        ));
    }
}
