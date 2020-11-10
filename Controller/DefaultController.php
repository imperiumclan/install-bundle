<?php

namespace ICS\InstallBundle\Controller;

use ICS\InstallBundle\Entity\Database;
use ICS\InstallBundle\Form\Type\DatabaseType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/" , name="ics_install_homepage")
     */
    public function index(ContainerInterface $container)
    {
        $path=$container->get('kernel')->getProjectDir().'/';

        if(file_exists($path.'.env.local'))
        {
            return $this->redirectToRoute('homepage');
        }
        

        return $this->render('@Install/index.html.twig', [
            'AppTitle' => 'Zeus'            
        ]);
    }

    /**
     * @Route("/database" , name="ics_install_database")
     */
    public function database(ContainerInterface $container)
    {
        $path=$container->get('kernel')->getProjectDir().'/';

        $database = new Database();
        $database->setType('mysql');
        $database->setPort('386');
        $database->setHost('localhost');

        
        $form = $this->createForm(DatabaseType::class,$database);

        
        

        return $this->render('@Install/steps/database.html.twig', [
            'form' => $form->createView()
        ]);
    }


}