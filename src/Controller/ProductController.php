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
use App\Form\ProductSearchType;
use App\Form\ProductSearchByFiltersType;
use Symfony\Component\Serializer\SerializerInterface;


class ProductController extends AbstractController
{

    //TODO merge barre de recherche , method index à inclure ici sans le form
    //TODO faire la requete en BDD via ProductRepository avec la valeur recupéré ici de model


    /**
     * @Route("/search", name = "search", methods = {"GET", "POST"})
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return false|string
     */
        public function index(Request $request, SerializerInterface $serializer) : Response
        {
            /*$products = $this->getDoctrine()
                ->getRepository(Product::class)
                ->findAll();
            if (!$products) {
                throw $this->createNotFoundException(
                    'No article found in article\'s table.'
                );
            }*/

            $data = $request->getContent();
            $value = json_decode($data, 'true');
            $response = new JsonResponse();
            $response->setData($value['model']);
            $products = $this->getDoctrine()->getRepository(Product::class)
                ->findLike($value['model']);


            /*$form = $this->createForm(
                ProductSearchType::class,
                null,
                ['method' => Request::METHOD_GET]
            );
            $form->handleRequest($request);
            if ($form->isSubmitted()) {
                $data = $form->getData();
                // $data contient les données du $_POST
                // Faire une recherche dans la BDD avec les infos de $data...*/
            $jsonContent = $serializer->serialize($products, 'json');
            $response = new Response();
            $response->setContent($jsonContent);

            return $response;

        }

       /* /**
         * @Route("/productsearchbyfilter", name="productbyfilter")
         */
       /* public function index2(Request $request)
        {
            $products = $this->getDoctrine()
                ->getRepository(Product::class)
                ->findAll();
            if (!$products) {
                throw $this->createNotFoundException(
                    'No article found in article\'s table.'
                );
            }


            $formfilter = $this->createForm(
                ProductSearchByFiltersType::class,
                null,
                ['method' => Request::METHOD_GET]
            );
            $formfilter->handleRequest($request);
            if ($formfilter->isSubmitted()) {
                $data = $formfilter->getData();
                // $data contient les données du $_POST
                // Faire une recherche dans la BDD avec les infos de $data...
                $products = $this->getDoctrine()->getRepository(Product::class)
                    ->findLikeFilter($data['category'], $data['brand'], $data['energyClass'], $data['ges'], $data['need']);


            }


            return $this->render('product/index2.html.twig', [
                'controller_name' => 'ProductController', 'products' => $products,
                'formfilter' => $formfilter->createView()];



    }
    }*/
}
