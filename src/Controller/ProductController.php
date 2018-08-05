<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Form\ProductType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    /**
     * @Route("/categories/{id}/products", requirements={"categoryId" = "\d+"}, name="category_product_list")
     */
    public function productsInCategoryList(Category $category, EntityManagerInterface $em)
    {
        return $this->render('app/product/list.html.twig', [
            'categories' => $em->getRepository(Category::class)->findAll(),
            'activeCategory' => $category,
            'products' => $category->getProducts()
        ]);
    }

    /**
     * @Route("/products", name="product_list")
     */
    public function productList(EntityManagerInterface $em)
    {
        return $this->render('app/product/list.html.twig', [
            'categories' => $em->getRepository(Category::class)->findAll(),
            'products' => $em->getRepository(Product::class)->findAll()
        ]);
    }

    /**
     * @Route("/products/{id}", requirements={"id" = "\d+"}, name="product_view")
     */
    public function productView(Product $product, EntityManagerInterface $em)
    {
        $categories = $em->getRepository(Category::class)->findAll();

        return $this->render('app/product/view.html.twig', [
            'categories' => $categories,
            'product' => $product
        ]);
    }
}
