<?php

namespace Ecommerce\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthController extends Controller
{
    public function connexionAction()
    {
        return $this->render('AccountBundle:Default:index.html.twig');
    }
    public function registrationAction()
    {
        return $this->render('AccountBundle:Default:index.html.twig');
    }
    public function deconnexionAction()
    {
        return $this->render('AccountBundle:Default:index.html.twig');
    }


}
