<?php

namespace MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class MenuController extends Controller {

    public function recentArticlesAction() {
        $menu = 'bla bla bla';

        return $this->render('menu/menu.html.twig', array('menu' => $menu));
    }

}
