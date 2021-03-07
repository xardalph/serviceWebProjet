<?php

namespace App\Controller;

use App\Repository\MorceauRepository;
use App\Soap\Morceau;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MorceauController extends AbstractController
{
    /**
     * @Route("/morceau", name="morceau")
     * @param MorceauRepository $morceauRepository
     * @return Response
     */
    public function index(MorceauRepository $morceauRepository): Response
    {
        return $this->render('morceau/index.html.twig', [
            'controller_name' => 'MorceauController',
            'morceaux' => $morceauRepository->findAll()
        ]);
    }
}