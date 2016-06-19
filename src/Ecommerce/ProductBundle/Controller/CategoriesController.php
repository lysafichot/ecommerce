<?php

namespace Ecommerce\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Ecommerce\AdminBundle\Form\CategoryType;
use Ecommerce\ProductBundle\Entity\Category;
use Ecommerce\ProductBundle\Entity\Media;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategoriesController extends Controller
{
	public function __construct() {

	}

	public function allproductsAction($id) {


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

		$em = $this->getDoctrine()->getManager();
		$products = $em->getRepository('ProductBundle:Product')->findByCategories($id);
		$category =  $em->getRepository('ProductBundle:Category')->find($id);
		$path = [];
		$enfants = $em->getRepository('ProductBundle:Category')->findBy(['idParent' => $category->getId()]);

		array_push($path, $category);
		while($category->getIdParent() != null) {
			$parent = $category->getIdParent();
			$category =  $em->getRepository('ProductBundle:Category')->find($parent);
			array_push($path, $category);


		}
		$path = array_reverse($path);
		$session->set('path',$path);

		$products= $this->productSous($enfants, $products);



		return $this->render('ProductBundle:Product:categorised.html.twig', array(
		                                                                          'price' => $price,
		                                                                          'products' => $products,
		                                                                          'products_panier' => $products_panier,
		                                                                          'last_username' => $lastUsername,
		                                                                          'error'         => $error,
		                                                                          ));

	}


	public function productSous($enfants, $products) {
		$em = $this->getDoctrine()->getManager();

		if(!empty($enfants)) {
			foreach ($enfants as $enfant) {
				$this->productSous( $em->getRepository('ProductBundle:Category')->findBy(['idParent' => $enfant->getId()]), $products);

				$products1 = $em->getRepository('ProductBundle:Product')->findByCategories($enfant->getId());
				$products = array_merge($products, $products1);
			}
		}
		return $products;

	}
}
