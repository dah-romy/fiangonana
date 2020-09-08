<?php

namespace App\Controller\Back;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("admin")
 */
class KristianaController extends AbstractController
{
    /**
     * @Route("/kristiana/mpandray", name="kristiana.mpandray")
     *
     * @return void
     */
    public function mpandray(){
        return $this->render("back/kristiana/mpandray.html.twig");
    }

    /**
     * @Route("/kristiana/tsy-mpandray", name="kristiana.tsy-mpandray")
     *
     * @return void
     */
    public function tsy_mpandray(){
        return $this->render("back/kristiana/tsy-mpandray.html.twig");
    }
}