<?php

namespace GoF\StreamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GoFController extends Controller
{
	/**
	 * @Route("/")
	 */
	public function indexAction()
	{
		return $this->render('GoFStreamBundle:Mains:accueil.html.twig');
	}

}
