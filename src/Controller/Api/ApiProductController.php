<?php

namespace App\Controller\Api;

use App\Entity\Product;
use App\Entity\Category;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiProductController extends AbstractController
{
    /**
     * @Route("/api/products", name="api_movies_get", methods={"GET"})
     */
    public function getCollection(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findByProductName();

        return $this->json(
            // Les données à sérialiser (à convertir en JSON)
            $products,
            // Le status code
            200,
            // Les en-têtes de réponse à ajouter (aucune)
            [],
            // Les groupes à utiliser par le Serializer
            ['groups' => 'get_products_collection']
        );
    }

    /**
     * @Route("/api/products/{id}", name="api_products_get_item", methods={"GET"})
     */
    public function getOneProduct(Product $product = null): Response
    {
        
        return $this->json(
            // Les données à sérialiser (à convertir en JSON)
            $product,
            // Le status code
            200,
            // Les en-têtes de réponse à ajouter (aucune)
            [],
            // Les groupes à utiliser par le Serializer
            ['groups' => 'get_products_item']
        );
    }
}
