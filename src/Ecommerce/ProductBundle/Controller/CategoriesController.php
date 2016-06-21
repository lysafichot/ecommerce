<?php

namespace Ecommerce\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\BossController;

use Symfony\Component\HttpFoundation\Request;
use Ecommerce\AdminBundle\Form\CategoryType;
use Ecommerce\ProductBundle\Entity\Category;
use Ecommerce\ProductBundle\Entity\Media;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategoriesController extends BossController
{
	public function __construct() {

	}

	public function allproductsAction($id) {

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
		$serviceCategory = $this->get('ecommerce.services');
		$products = $serviceCategory->findProductSous($enfants, $products);

		return $this->rend('ProductBundle:Product:categorised.html.twig', array(
		                                                                          'products' => $products,

		                                                                          ));

	}


}
