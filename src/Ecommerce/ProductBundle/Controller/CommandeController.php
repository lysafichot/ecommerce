<?php

namespace Ecommerce\ProductBundle\Controller;
use Ecommerce\BossController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ecommerce\ProductBundle\Entity\Panier;
use Ecommerce\ProductBundle\Entity\Commande;
use Ecommerce\AccountBundle\Entity\Adresse;
use Ecommerce\AccountBundle\Entity\Accounts;
use Ecommerce\AccountBundle\Entity\User;

use Ecommerce\AccountBundle\Form\RegisterType;

use Ecommerce\AccountBundle\Form\AdressesType;
use Ecommerce\AccountBundle\Form\UserType;

class CommandeController extends BossController
{

	public function indexAction(Request $request) {


		$em = $this->getDoctrine()->getManager();
		$account = new Accounts();
		$userInfo = new User();
		$user = $this->get('security.context')->getToken()->getUser();
		if(is_object($user)){
			$account = $em->getRepository('AccountBundle:Accounts')->find($user->getId());
			$userInfo = $em->getRepository('AccountBundle:User')->find($user->getId());
			if($userInfo) {
				$account->setUser($userInfo);
				$em->persist($account);
				$em->flush();
			} else {
				$userInfo = new User();

			}
		}

		$formInfo   = $this->createForm(UserType::class, $userInfo);
		$formInfo->handleRequest($request);

		$session = $this->getRequest()->getSession();
		$session->set('account',$account);

		if ($formInfo->isSubmitted()) {
			$userInfo->setLastname($formInfo['lastname']->getData());
			$userInfo->setFirstname($formInfo['firstname']->getData());
			$userInfo->setBirthday($formInfo['birthday']->getData());
			$userInfo->setCivilite($formInfo['civilite']->getData());
			$userInfo->setAccount($user);

			$em->persist($userInfo);
			$em->flush();
			if(is_object($user)){
				$account->setUser($userInfo);
				$em->persist($account);
				$em->flush();
			} else {
					//todo non inscrit commande
				$account->setUser($userInfo);
				$session->set('account',$account);
			}
			return $this->redirectToRoute('payement');
		}

		$adresse = new Adresse();
		$formAdr   = $this->createForm(AdressesType::class, $adresse);
		$adresses = null;
		if(is_object($user)){
			$adresses = $em->getRepository('AccountBundle:Adresse')->findBy(['account' => $account]);
		}

		$formAdr->handleRequest($request);
		if ($formAdr->isSubmitted()) {
			if(!isset($adresses) || !$adresses ) {

				$adresses = new Adresse();
				$adresses->setNumero($formAdr['numero']->getData());
				$adresses->setName($formAdr['name']->getData());
				$adresses->setCity($formAdr['city']->getData());
				$adresses->setNumero($formAdr['numero']->getData());
				$adresses->setCodePostal($formAdr['codePostal']->getData());
				$adresses->setAccount($account);
				$adresses->setType($formAdr['type']->getData());
				$adresses->setSelected(true);
				$em->persist($adresses);
				$em->flush();
				return $this->redirectToRoute('confirmation');
			} else {
				return $this->redirectToRoute('confirmation');
			}

		}
		return $this->rend('ProductBundle:Panier:payement.html.twig', array(
		                                                                    'adresses' => $adresses,
		                                                                    'account' => $account,
		                                                                    'formAdr' =>$formAdr->createView(),
		                                                                    'formInfo' =>$formInfo->createView(),

		                                                                    ));

	}
	public function confirmationAction(Request $request) {


		$em = $this->getDoctrine()->getManager();
		$id = $request->get('selected');
		$user = $this->get('security.context')->getToken()->getUser();
		$userInfo = $em->getRepository('AccountBundle:User')->findBy(['account' => $user->getId()]);
		if(empty($userInfo) || !empty($userInfo) && $userInfo[0]->getLastname()  == null || !empty($userInfo) && $userInfo[0]->getFirstname()  == null || !empty($userInfo) && $userInfo[0]->getCivilite()  == null)    {
			return $this->redirectToRoute('payement');
		}
		if(is_object($user)){
			$adresse = $em->getRepository('AccountBundle:Adresse')->findBy(['account' => $user, 'selected' => true]);
			$adresse = $adresse[0];
			if($id !== null && $adresse->getId() != $id) {
				$adresse->setSelected(0);
				$adresse = $em->getRepository('AccountBundle:Adresse')->find($id);
				$adresse->setSelected(1);
			}
		} else {

		}
				//form payement bancaire
		return $this->rend('ProductBundle:Panier:confirmation.html.twig', array('adresse' => $adresse,
		                                                                        'user' =>$userInfo,

		                                                                        ));

	}

	public function transactionAction(Request $request) {

		$em = $this->getDoctrine()->getManager();

		$session = $this->getRequest()->getSession();
		$products_panier = $session->get('products');
		$user = $this->get('security.context')->getToken()->getUser();
		$commande = new Commande();
		if(!empty($products_panier) && 1==1) { //payement effectue 1==1
			if(is_object($user)) {
				$adresse = $em->getRepository('AccountBundle:Adresse')->findBy(['account' => $user, 'selected' => true]);
				if($adresse[0]) {
					$commande->setAdresse($adresse[0]);
					$em->persist($commande);
					$em->flush();
				}
			}
			foreach ($products_panier as $key => $value) {
				$panier = new Panier();
				// inject
				$product = $em->getRepository('ProductBundle:Product')->find($value->derived->getProduct()->getId());
				$value->derived->setProduct($product);

				$panier->setQuantity($value->count);
				$panier->setPack(false);
				$panier->setCommande($commande);
				$panier->setProductDerivedId($value->derived->getId());


				$em->persist($panier);
				$em->flush();
			}
		}
		$session->remove('products');
		return $this->redirectToRoute('get_commande');

	}


	public function getCommandeAction(Request $request) {


		$em = $this->getDoctrine()->getManager();

		$user = $this->get('security.context')->getToken()->getUser();

		$commandes = $em->getRepository('ProductBundle:Commande')->findByUser($user->getId());
		foreach ($commandes as $key => $value) {

		}

		var_dump($commandes);die;

		return $this->rend('ProductBundle:Commande:commande.html.twig', array('commandes' => $commandes,

		                                                                      ));

	}




}

