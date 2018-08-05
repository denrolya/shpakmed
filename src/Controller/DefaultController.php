<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index(EntityManagerInterface $em)
    {
        $products = $em->getRepository(Product::class)->findAll();
        $categories = $em->getRepository(Category::class)->findAll();

        return $this->render('app/index/index.html.twig', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
