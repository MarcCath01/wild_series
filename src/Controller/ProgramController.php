<?php

namespace App\Controller;

use Doctrine\DBAL\ForwardCompatibility\Result;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

 /**
     * @Route("/programs", name="program")
     */



class ProgramController extends AbstractController
{
    /**
     * @Route("/", name="program_index")
     */

    public function index(): Response
    {

        return $this->render('program/index.html.twig', [

            'website' => 'Wild Séries',
     
         ]);
    }
}
