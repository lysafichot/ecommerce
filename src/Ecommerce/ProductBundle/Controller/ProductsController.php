<?php

namespace Ecommerce\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ecommerce\AdminBundle\Form\ProductType;
use Ecommerce\AdminBundle\Form\ProductDerivedType;
use Ecommerce\ProductBundle\Entity\Media;
use Symfony\Component\HttpFoundation\Session\Session;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Ecommerce\ProductBundle\Entity\Product;
use Ecommerce\ProductBundle\Entity\ProductDerived;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductsController extends Controller
{

	public function addPanierAction($id, $productId) {
		$em = $this->getDoctrine()->getManager();
		$session = $this->getRequest()->getSession();
		/*$session->remove('products');die;*/
		$products = $session->get('products');
		if(!$products) {
			$products = [];
		}

		$already = 0;
		foreach ($products as $value) {
			if($value->derived->getId() == $productId) {
				$already = 1;
				$value->count +=1;

			}
		}
		/*		var_dump($products);die;*/
		if($already == 0) {
			$derived =  $em->getRepository('ProductBundle:ProductDerived')->find($productId);

			$obj = new \stdClass;
			$obj->derived =$derived;
			$obj->count= 1;
			array_push($products, $obj);

			$session->set('products',$products);
		}
		return $this->redirect($this->generateUrl('products_category', array('id' => $id)), 301);

	}
	public function viewAction($id, $productId) {

		$session = $this->getRequest()->getSession();
		/*$session->remove('products');die;*/
		$products_panier = $session->get('products');
		/*		var_dump($products_panier);die;*/
		$price = null;
		foreach ($products_panier as $product) {

			$price += $product->count * $product->derived->getPrice();
		}


		$authenticationUtils = $this->get('security.authentication_utils');
		$error = $authenticationUtils->getLastAuthenticationError();
		$lastUsername = $authenticationUtils->getLastUsername();

		return $this->render('ProductBundle:Product:view.html.twig', array(
		                                                                   'price' => $price,
		                                                                   'product' => $product,
		                                                                   'products_panier' => $products_panier,
		                                                                   'last_username' => $lastUsername,
		                                                                   'error'         => $error,
		                                                                   ));
	}

}