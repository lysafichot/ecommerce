<?php

namespace Ecommerce\AccountBundle\Controller;
use Ecommerce\BossController;
use Ecommerce\AccountBundle\Form\UserType;

use Ecommerce\AccountBundle\Form\AdressesType;
use Ecommerce\AccountBundle\Entity\Adresse;
use Ecommerce\AccountBundle\Entity\Accounts;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccountsController extends BossController
{
	public function indexAction()
	{
		return $this->render('AccountBundle:Default:index.html.twig');
	}

	public function accountAction(Request $request) {

		$em = $this->getDoctrine()->getManager();
		$user = $this->get('security.context')->getToken()->getUser();
		$account = $em->getRepository('AccountBundle:Accounts')->find($user->getId());
		$adresse = new Adresse();

		$formFac   = $this->createForm(AdressesType::class, $adresse);
		$formLiv   = $this->createForm(AdressesType::class, $adresse);
		$formInfo   = $this->createForm(UserType::class, $account);
		$formFac->handleRequest($request);
		$formLiv->handleRequest($request);
		$formInfo->handleRequest($request);

		$serviceCategory = $this->get('ecommerce.services');

		$adressesFac = $em->getRepository('AccountBundle:Adresse')->findAdresses('Facturation', $user->getId());
		$adressesLiv = $em->getRepository('AccountBundle:Adresse')->findAdresses('Livraison', $user->getId());

		if ($formInfo->isSubmitted()) {

			$account->setLastname($formInfo['lastname']->getData());
			$account->setFirstname($formInfo['firstname']->getData());

			$account->setBirthday($formInfo['birthday']->getData()->format('Y-m-d'));
			$account->setCivilite($formInfo['civilite']->getData());

			$em->persist($account);
			$em->flush();

			return $this->redirectToRoute('account');

		}

		if ($formFac->isSubmitted() && $formFac->isValid()) {

			$adresse = $adresse->addAdresse($formFac, $user);
			$em = $this->getDoctrine()->getManager();
			$em->persist($adresse);
			$em->flush();

			return $this->redirectToRoute('account');

		}
		if ($formLiv->isSubmitted() && $formLiv->isValid()) {

			$adresse = $adresse->addAdresse($formLiv, $user);
			$em = $this->getDoctrine()->getManager();
			$em->persist($adresse);
			$em->flush();

			return $this->redirectToRoute('account');
		}
		return $this->rend('AccountBundle:Auth:account.html.twig', array(
		                                                                 'account' =>$account,
		                                                                 'formFac' => $formFac->createView(),
		                                                                 'formLiv' => $formLiv->createView(),
		                                                                 'formInfo' =>$formInfo->createView(),
		                                                                 'adressesFac' => $adressesFac,
		                                                                 'adressesLiv' => $adressesLiv,

		                                                                 ));

	}


	public function updateAdresseAction(Request $request) {
		$id = $request->get('id');

		$em = $this->getDoctrine()->getManager();
		$user = $this->get('security.context')->getToken()->getUser();
		$adresse = $em->getRepository('AccountBundle:Adresse')->findBy(['account' => $user, 'id' => $id]);
		if(isset($adresse[0])) {
var_dump($adresse->getSelected());
			$adresse[0]->setNumero($request->get('numero'));
			$adresse[0]->setName($request->get('name'));
			$adresse[0]->setCodePostal($request->get('codePostal'));
			$adresse[0]->setCity($request->get('city'));
			$adresse[0]->setSelected($request->get('selected'));


			$em->persist($adresse[0]);
			$em->flush();
		}
		return $this->redirectToRoute('account');


	}
}
