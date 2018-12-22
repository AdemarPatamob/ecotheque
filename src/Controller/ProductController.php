<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ProductController extends AbstractController
{

    /**
     * @Route("/search", name = "search", methods = {"GET", "POST"})
     * @param Request $request
     * @return null|JsonResponse
     */
    public function index(Request $request): ?JsonResponse
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $data = $request->getContent();
        $data = json_decode($data, 'true');
        $products = $this->getDoctrine()->getRepository(Product::class)
            ->findLike($data['model']);
        $jsonContent = $serializer->normalize($products, 'json');
        $response = new JsonResponse($jsonContent);
        return $response;

    }

    /**
     * @Route("/productsearchbyfilter", name="productbyfilter")
     * @param Request $request
     * @return JsonResponse
     */
    public function index2(Request $request) : ?JsonResponse
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $data = $request->getContent();
        $data = json_decode($data, 'true');
        $products = $this->getDoctrine()->getRepository(Product::class)
            ->findLikeFilter($data['category'], $data['brand'], $data['need']);
        $jsonContent = $serializer->normalize($products, 'json');
        $response = new JsonResponse($jsonContent);
        return $response;

    }
}
