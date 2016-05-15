<?php

namespace Ecommerce\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
	public function indexAction()
	{
		$session = $this->getRequest()->getSession();
		$user = $session->get('user');

		return $this->render('ProductBundle:Index:index.html.twig', array(
		                                                                  'session' => $user,
		                                                                  ));
	}
}
