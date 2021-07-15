<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\HttpCache\ResponseCacheStrategy;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    /**
     * @route("/", name="app_index")
     */

    public function index(): Response
    {
        return $this->render('/index.html.twig', [
            'website' => 'Bienvenue !',
        ]);
    }
}
