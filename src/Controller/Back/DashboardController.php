<?php

namespace App\Controller\Back;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("admin")
 */
class DashboardController extends AbstractController
{
    /**
     * @Route("/", name="admin.index")
     */
    public function dashboard(){
        if (!$this->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('app.login');
        }
        
        return $this->render("back/dashboard/index.html.twig");
    }
}