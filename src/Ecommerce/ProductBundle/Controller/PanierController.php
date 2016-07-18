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

class PanierController extends BossController
{
	public function addPanierAction($id, $productId) {
		$em = $this->getDoctrine()->getManager();
		$session = $this->getRequest()->getSession();
		$products = $session->get('products');
		if(!$products) {
			$products = [];
		}
		$already = 0;
		if(!empty($products)) {
			foreach ($products as $value) {
				if($value->derived->getId() == $productId) {
					$already = 1;
					$value->count +=1;
				}
			}
		}

		if($already == 0) {
			$derived =   $em->getRepository('ProductBundle:ProductDerived')->find($productId);
			$medias = $em->getRepository('ProductBundle:Media')->findBy(['productDerived' => $derived->getId()]);
			$derived->setMedias($medias);

			$obj = new \stdClass;
			$obj->derived = $derived;
			$obj->count= 1;

			array_push($products, $obj);

			$session->set('products',$products);
		}
		return $this->redirect($this->generateUrl('products_category', array('id' => $id)), 301);

	}


	public function panierAction() {

		return $this->rend('ProductBundle:Panier:view.html.twig', array(

		                                                                  ));
	}

	public function removePanierAction($id) {
		$session = $this->getRequest()->getSession();
		$products = $session->get('products');
		foreach ($products as $key => $value) {
			if($value->derived->getId() == $id) {
				unset($products[$key]);

			}
		}
		$session->set('products',$products);
		return $this->redirectToRoute('panier');

	}
	public function qtePanierAction($id, $option) {
		$session = $this->getRequest()->getSession();
		$products = $session->get('products');
		foreach ($products as $key => $value) {
			if($value->derived->getId() == $id){
				$count = $value->count;
				if($option == false && $count > 1) {
					$value->count -= 1;
				}
				if($option == true) {
					$value->count += 1;
				}

			}
		}
		$session->set('products',$products);
		return $this->redirectToRoute('panier');
	}
}