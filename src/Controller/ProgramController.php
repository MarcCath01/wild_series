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

    /**
     * @Route("/{id}", name="show", requirements={"id"="\d+"}, methods={"GET"})
     */

    public function show(int $id): Response
    {
        if (is_int($id)) {
            return $this->render('program/show.html.twig', [

                'id' => $id

            ]);
        } else {
            return $this->redirectToRoute('status/notfound.html.twig', [], 404);
        }
    }
}
