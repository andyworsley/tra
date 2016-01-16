<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ProductTwo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // save an object
        $product = new ProductTwo();
        $product->setName('Foo Two');
        $product->setPrice(random_int(0,100));
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        // list the objects
        $info = "";
        $repo = $em->getRepository('AppBundle:ProductTwo');
        $products = $repo->findAll();
        $productPrices = array_map(function(ProductTwo $product) {
            return $product->getPrice();
        }, $products);

        // render
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'product_prices' => $productPrices
        ));
    }
}
