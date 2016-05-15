<?php
namespace Ecommerce\AccountBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
	/**
     	* @Route("/login", name="login")
     	*/
	public function loginAction(Request $request)
	{
		$authenticationUtils = $this->get('security.authentication_utils');
		var_dump($authenticationUtils);
		$error = $authenticationUtils->getLastAuthenticationError();

		$lastUsername = $authenticationUtils->getLastUsername();
		var_dump($lastUsername);
		return $this->render(
		                     'AccountBundle:Security:login.html.twig',
		                     array(
		                           'last_username' => $lastUsername,
		                           'error'         => $error,
		                           )
		                     );
	}
}