<?php

namespace AppBundle\Controller;

use PHPShopify\ShopifySDK;//use para incluir la libreria PHPShopify que integra el SDK
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ShopifyController extends Controller
{
    /**
     * @Route("/productos")
     */
    public function IndexAction()
    {
        //declarar las configuraciones (Accesos)
        $config = array(
            'ShopUrl' => 'test-triciclo.myshopify.com',
            'ApiKey' => '18e5e5fa38d9aec053388dd34d7fbe79',
            'Password' => 'fe833c871c1c0d1ba0ce1b54512f88fc',
        );
        $shopify = new ShopifySDK($config);//Crear una instancia del SDK de Shopify/PHP
        $products = $shopify->Product->get();//Consultar el listado de Productos
        return $this->render('AppBundle:Shopify:index.html.twig', array(
            'products'=>$products
        ));
    }

    /**
     * @Route("/variantes")
     */
    public function VariantsAction()
    {
        //declarar las configuraciones (Accesos)
        $config = array(
            'ShopUrl' => 'test-triciclo.myshopify.com',
            'ApiKey' => '18e5e5fa38d9aec053388dd34d7fbe79',
            'Password' => 'fe833c871c1c0d1ba0ce1b54512f88fc',
        );
        $shopify = new ShopifySDK($config);//Crear una instancia del SDK de Shopify/PHP
        $products = $shopify->Product->get();//Consultar el listado de Productos
        return $this->render('AppBundle:Shopify:variants.html.twig', array(
            'products'=>$products
        ));
    }
}
