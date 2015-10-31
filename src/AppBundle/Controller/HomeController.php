<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller {

    /**
     * @Route("/home/")
     */
    public function indexAction() {
        $count = 0;
        return $this->render(
                        'homepage/index.html.twig', array('count' => $count)
        );

    }

}
