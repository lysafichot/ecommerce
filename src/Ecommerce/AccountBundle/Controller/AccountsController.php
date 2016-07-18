<?php

namespace Ecommerce\AccountBundle\Controller;
use Ecommerce\BossController;
use Ecommerce\AccountBundle\Form\UserType;

use Ecommerce\AccountBundle\Form\AdressesType;
use Ecommerce\AccountBundle\Entity\Adresse;
use Ecommerce\AccountBundle\Entity\Accounts;
use Ecommerce\AccountBundle\Entity\User;

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
		$userInfo = $em->getRepository('AccountBundle:User')->findBy(['account' => $user->getId()]);
		if($userInfo) {
			$userInfo = $userInfo[0];
			$account->setUser($userInfo);

		} else {
			$userInfo = new User();

		}
		$adresse = new Adresse();
		$formFac   = $this->createForm(AdressesType::class, $adresse);
		$formLiv   = $this->createForm(AdressesType::class, $adresse);
		$formInfo   = $this->createForm(UserType::class, $userInfo);
		$formFac->handleRequest($request);
		$formLiv->handleRequest($request);
		$formInfo->handleRequest($request);

		$serviceCategory = $this->get('ecommerce.services');

		$adressesFac = $em->getRepository('AccountBundle:Adresse')->findAdresses('Facturation', $user->getId());
		$adressesLiv = $em->getRepository('AccountBundle:Adresse')->findAdresses('Livraison', $user->getId());

		if ($formInfo->isSubmitted()) {
			$userInfo->setLastname($formInfo['lastname']->getData());
			$userInfo->setFirstname($formInfo['firstname']->getData());
			$userInfo->setBirthday($formInfo['birthday']->getData());
			$userInfo->setCivilite($formInfo['civilite']->getData());
			$userInfo->setAccount($user);
			$em->persist($userInfo);
			$em->flush();

			$account->setUser($userInfo);
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
			$adresse[0]->setNumero($request->get('numero'));
			$adresse[0]->setName($request->get('name'));
			$adresse[0]->setCodePostal($request->get('codePostal'));
			$adresse[0]->setCity($request->get('city'));
			if($request->get('selected') =='on') { //service pour remove les autres
			$adresse[0]->setSelected(1);

			} else {
			$adresse[0]->setSelected(0);

			}


			$em->persist($adresse[0]);
			$em->flush();
		}
		return $this->redirectToRoute('account');


	}
}
