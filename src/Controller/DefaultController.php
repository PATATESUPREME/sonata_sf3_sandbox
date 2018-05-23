<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController
 *
 * @package App\Controller
 */
class DefaultController extends Controller
{
    /**
     * Action on the homepage.
     *
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->redirectToRoute('sonata_admin_dashboard');
    }
}
