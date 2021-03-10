<?php


namespace App\Controller;

use App\Repository\ArtisteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ArtisteController extends AbstractController
{
    /**
     * @Route("/artiste", name="artiste")
     * @param HttpClientInterface $client
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function index(HttpClientInterface $client): Response
    {

        $response = new Response(
            '<html><body>
                    
                    <p> Lucky number: bfeusdbfuesbfu </p> 
                    <pre id="json"></pre>
                    
                    <script type="text/javascript" src="/monscript.js"></script>
                </body></html>'
        );
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}