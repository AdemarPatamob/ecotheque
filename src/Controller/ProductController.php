<?php

namespace App\Controller;


use App\Form\ProductSearchType;
use App\Form\ProductSearchByFiltersType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\Response;



class ProductController extends AbstractController
{
    /**
     * @Route("/productsearch", name="product")
     */
    public function index(Request $request)
    {
        $products = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findAll();
        if (!$products) {
            throw $this->createNotFoundException(
                'No article found in article\'s table.'
            );
        }

        $form = $this->createForm(
            ProductSearchType::class,
            null,
            ['method' => Request::METHOD_GET]
        );
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $data = $form->getData();
            // $data contient les données du $_POST
            // Faire une recherche dans la BDD avec les infos de $data...
            $products = $this->getDoctrine()->getRepository(Product::class)
                ->findLike($data['searchField']);
        }


        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController', 'products' => $products,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/productsearchbyfilter", name="productbyfilter")
     */
    public function index2(Request $request)
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
            'formfilter' => $formfilter->createView()
        ]);

    }
}
