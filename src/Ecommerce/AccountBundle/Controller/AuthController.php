<?php

namespace Ecommerce\AccountBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ecommerce\AccountBundle\Form\UserType;
use Ecommerce\AccountBundle\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class AuthController extends Controller
{

	public function registrationAction(Request $request)
	{

		$user = new User();
		$form   = $this->get('form.factory')->create(UserType::class, $user);

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			$plainPassword = $form['plainPassword']->getData();

			$encoder = $this->container->get('security.password_encoder');
			$encoded = $encoder->encodePassword($user, $plainPassword);
			$user->setPassword($encoded);
			$user->setUsername($form['username']->getData());
			$user->setEmail($form['email']->getData());
			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();

			return $this->redirectToRoute('ecommerce_homepage');
		}

		return $this->render('AccountBundle:Auth:registration.html.twig', array(
		                                                                        'form' => $form->createView(),
		                                                                        ));
	}

	public function deconnexionAction()
	{
		return $this->render('AccountBundle:Default:index.html.twig');
	}


}
