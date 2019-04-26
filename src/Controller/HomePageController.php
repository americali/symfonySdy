<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/home/page", name="home_page")
     */
    public function index()
    {
        
        return $this->render('home_page/index.html.twig');//,['last_username' => $lastUsername, 'error' => $error]); 
        /*if ($this->getUser()){
            $rolesUser = $this->getUser()->getRoles();
            if (in_array('ROLE_ADMIN_SHELTER', $rolesUser) ){
                return $this->redirectToRoute('shelter'); 
            }
            else {
                return $this->render('home_page/index.html.twig');//,['last_username' => $lastUsername, 'error' => $error]);   
            }
        }*/
        
        
      
        
        
    }
}
