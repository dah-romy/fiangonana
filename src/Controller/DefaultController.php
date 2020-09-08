<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController{

    /*
     * @Route("/", name="redirect")
     */
    public function _redirect(){
        return $this->redirectToRoute("admin.index");
    }
}