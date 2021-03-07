<?php

namespace App\Controller;

use App\Repository\ArtisteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtisteController extends AbstractController
{
    /**
     * @Route("/artiste", name="artiste")
     * @param ArtisteRepository $artisteRepository
     * @return Response
     */
    public function index(ArtisteRepository $artisteRepository): Response
    {

        $ch = curl_init("127.0.0.1:8000/api/artistes");
        $data = curl_exec($ch);
        curl_close($ch);

        return $this->render('artiste/index.html.twig', [
            'controller_name' => 'ArtisteController',
            'artistes' => json_decode($data),
            'data'=> var_dump($data)
        ]);
    }
}
