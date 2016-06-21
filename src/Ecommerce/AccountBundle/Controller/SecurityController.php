<?php
namespace Ecommerce\AccountBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Ecommerce\AccountBundle\Form\RegisterType;
use Ecommerce\AccountBundle\Entity\Accounts;


class SecurityController extends Controller
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

    	return $this->render(
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

        $user = new Accounts();
        $form   = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $plainPassword = $form['plainPassword']->getData();
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user, $plainPassword);
            $user->setPassword($encoded);
            $user->setUsername($form['username']->getData());
            $user->setEmail($form['email']->getData());
            $user->setRoles(['ROLE_USER']);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('ecommerce_homepage');
        }

        return $this->render('AccountBundle:Security:registration.html.twig', array(
                                                                                'form' => $form->createView(),
                                                                                ));
    }

}