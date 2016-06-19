<?php

namespace Ecommerce\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class IndexController extends Controller
{
	public function indexAction(Request $request)
	{


		$session = $this->getRequest()->getSession();
		/*$session->remove('products');die;*/
		$products_panier = $session->get('products');
/*		var_dump($products_panier);die;
*/
		$total = null;
		$price = null;
		foreach ($products_panier as $product) {

			$total +=$product->count;
			$price += $product->count * $product->derived->getPrice();
		}
		$session->set('total',$total);
		$authenticationUtils = $this->get('security.authentication_utils');
		$error = $authenticationUtils->getLastAuthenticationError();
		$lastUsername = $authenticationUtils->getLastUsername();

		$repository = $this->getDoctrine()->getRepository('ProductBundle:Category');
		$categories = $repository->findBy(array('preview' => true));
		/*		var_dump($categories[0]->getMedias());die;*/


		return $this->render('::index.html.twig', array(
		                                                'products_panier' =>$products_panier,
		                                                'price' =>$price,
		                                                'categories' => $categories,
		                                                'last_username' => $lastUsername,
		                                                'error'         => $error

		                                                ));
	}
}
