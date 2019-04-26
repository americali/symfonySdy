<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        
        
            
               return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
            
        
        
    }
    
    
    /**
     * @Route("/choose/section", name="choose_section")
     */
    public function chooseSection(){
    
        if ($this->getUser()){
            $rolesUser = $this->getUser()->getRoles();
            
            if (in_array('ROLE_ADMIN_SHELTER', $rolesUser) ){
                return $this->redirectToRoute('shelter'); 
            }
            else {
                return $this->redirectToRoute('user'); ;   
            }
        }
    }
    /**
     * @Route("/logout", name="app_logout", methods={"GET"})
     */
    public function logout()
    {
        return $this->redirect('home_page');
    }
}
