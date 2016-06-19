<?php

namespace Ecommerce\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccountsController extends Controller
{
    public function indexAction()
    {
        return $this->render('AccountBundle:Default:index.html.twig');
    }
}
