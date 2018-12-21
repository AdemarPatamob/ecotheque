<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

class ProductController extends AbstractController
{

    //TODO merge barre de recherche , method index à inclure ici sans le form
    //TODO faire la requete en BDD via ProductRepository avec la valeur recupéré ici de model

    /**
     * @Route("/search", name = "search", methods = {"GET", "POST"})
     * @param Request $request
     * @return Response
     */
    public function getSearch(Request $request) : Response
    {
        $data = $request->getContent();
        $value = json_decode($data, 'true');
        $response = new JsonResponse();
        $response->setData($value['model']);

        return $response;
    }
}
