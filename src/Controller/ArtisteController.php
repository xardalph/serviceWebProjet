<?php

namespace App\Controller;

use App\Repository\ArtisteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ArtisteController extends AbstractController
{
    private $client;

    /**
     * @Route("/artiste", name="artiste")

     */
    public function index(): Response
    {

        return $this->render('artiste/index.html.twig', [
            'controller_name' => 'ArtisteController',
            'test' => $content
        ]);
    }
}