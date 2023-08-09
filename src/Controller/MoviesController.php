<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    private $em;
    
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        // findAll() - SELECT * FROM movie
        // find(9) - SELECT * FROM movie WHERE id=9
        // findBy() - SELECT * FROM movie ORDER BY id DESC
        // findOneBy() - SELECT * FROM movie WHERE ID = 10 AND title = 'avengers' ORDER BY id DESC
        // count() - SELECT COUNT() FROM movie WHERE id = 9
        // getClassName() - returns class name e.g. "App\Entity\Movie"

        return $this->render('index.html.twig');
    }
}
