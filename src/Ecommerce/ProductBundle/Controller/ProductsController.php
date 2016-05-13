<?php

namespace Ecommerce\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductsController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProductBundle:Index:index.html.twig');
    }
}
