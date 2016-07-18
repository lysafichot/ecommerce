<?php
namespace Ecommerce\AccountBundle\Controller;
use Ecommerce\BossController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Ecommerce\AccountBundle\Form\RegisterType;
use Ecommerce\AccountBundle\Entity\Accounts;


class SecurityController extends BossController
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {

        //BOSSCONTROLLER
    	$authenticationUtils = $this->get('security.authentication_utils');
    	$error = $authenticationUtils->getLastAuthenticationError();
    	$lastUsername = $authenticationUtils->getLastUsername();

    	return $this->rend(
    	                    'AccountBundle:Security:login.html.twig',
    	                     array(
    	                           'last_username' => $lastUsername,
    	                           'error'         => $error,
    	                           )
    	                     );
    }
    /**
     * @Route("/registration", name="registration")
     */
    public function registrationAction(Request $request)
    {

        $account = new Accounts();
        $form   = $this->createForm(RegisterType::class, $account);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $plainPassword = $form['plainPassword']->getData();
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($account, $plainPassword);
            $account->setPassword($encoded);
            $account->setUsername($form['username']->getData());
            $account->setEmail($form['email']->getData());
            $account->setRoles(['ROLE_USER']);



            $em = $this->getDoctrine()->getManager();
            $em->persist($account);
            $em->flush();

            return $this->redirectToRoute('ecommerce_homepage');
        }

        return $this->rend('AccountBundle:Security:registration.html.twig', array(
                                                                                'form' => $form->createView(),
                                                                                ));
    }

}