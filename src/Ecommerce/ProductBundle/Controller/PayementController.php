<?php

namespace Ecommerce\ProductBundle\Controller;
use Ecommerce\BossController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PayementController extends BossController
{

	public function indexAction(Request $request) {

		return $this->rend('ProductBundle:Panier:payement.html.twig', array(

		                                                                     ));

	}
}
