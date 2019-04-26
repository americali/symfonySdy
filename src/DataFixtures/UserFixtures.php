<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
         $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
       
            $user = new user();
            $user->setName("Luisa");
            $user->setEmail ("luisa@mail.be");
            $user->setPassword($this->passwordEncoder->encodePassword(
                 $user,
                 'password'
             ));
            $manager->persist ($user);
            
             $manager->flush();
             
    }

    
}
