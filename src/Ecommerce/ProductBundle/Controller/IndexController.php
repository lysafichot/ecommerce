<?php

namespace Ecommerce\ProductBundle\Controller;
use Ecommerce\BossController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class IndexController extends BossController
{
	public function indexAction(Request $request)
	{
		$service = $this->get('ecommerce.services');
		$categorieRanger= $service->rangeCategories();

		$repository = $this->getDoctrine()->getRepository('ProductBundle:Category');
		$categories = $repository->findBy(array('preview' => true));

		return $this->rend('::index.html.twig', array(
		                                                'categorieRanger' =>$categorieRanger,
		                                                'categories' => $categories,

		                                                ));
	}
}
