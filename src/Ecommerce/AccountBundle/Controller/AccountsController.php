<?php

namespace Ecommerce\AccountBundle\Controller;
use Ecommerce\BossController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccountsController extends BossController
{
	public function indexAction()
	{
		return $this->render('AccountBundle:Default:index.html.twig');
	}

	public function accountAction() {




/*		$user =
*/
		return $this->rend('AccountBundle:Auth:account.html.twig', array(

		                                                                   ));

	}
}
