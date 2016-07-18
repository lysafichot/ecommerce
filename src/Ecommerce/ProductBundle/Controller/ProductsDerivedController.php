<?php

namespace Ecommerce\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ecommerce\BossController;

use Ecommerce\AdminBundle\Form\ProductType;
use Ecommerce\AdminBundle\Form\ProductDerivedType;
use Ecommerce\ProductBundle\Entity\Media;
use Symfony\Component\HttpFoundation\Session\Session;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Ecommerce\ProductBundle\Entity\Product;
use Ecommerce\ProductBundle\Entity\ProductDerived;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductsDerivedController extends BossController
{
	public function searchAction(Request $request) {

		$postData = $request->request->get('search');
		$repository = $this->getDoctrine()->getRepository('ProductBundle:Product');
		$searchs = $repository->findBySearch($postData);

		return $this->rend('ProductBundle:Product:search.html.twig', array(
		                                                                   'postsearch' => $postData,
		                                                                   'searchs' => $searchs,
		                                                                   ));
	}
	public function viewAction($productId) {

		$em = $this->getDoctrine()->getManager();
		$product = $em->getRepository('ProductBundle:Product')->find($productId);
		return $this->rend('ProductBundle:Product:view.html.twig', array(
		                                                                 'product' => $product,

		                                                                 ));
	}


}