<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class ShelterController extends AbstractController
{
    /**
     * @Route("/shelter/index", name="shelter")
     * 
     */
    public function index()
    {
        return $this->render('shelter/index.html.twig');
       
    }
}
