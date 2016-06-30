<?php
namespace Ecommerce;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class BossController extends Controller {


	public function rend($view, $params = []) {

		$session = $this->getRequest()->getSession();
		$products_panier = $session->get('products');
		$service = $this->get('ecommerce.services');
		$service->panier($products_panier, $session);

		$authenticationUtils = $this->get('security.authentication_utils');
		$error = $authenticationUtils->getLastAuthenticationError();
		$lastUsername = $authenticationUtils->getLastUsername();

		$globals = ['last_username' => $lastUsername, 'error' => $error];
		$array = array_merge($params, $globals);

		return $this->render($view, $array);
	}
}