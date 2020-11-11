<?php
namespace App\Controller;

use App\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController{

    /**
     * @Route("/", name="index")
     * @param ObjectManager $manager
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ObjectManager $manager) {

        $user = new User();
        $user->setUsername('demo');
        $user->setPassword('0000');


        $manager->persist($user);
        $manager->flush();

        return $this->render('pages/index.html.twig', [
            'properties' => 'property'
        ]);
    }


}