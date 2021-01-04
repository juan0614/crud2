<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JuanController extends AbstractController
{
    /**
     * @Route("/juan", name="juan")
     */
    public function index(): Response
    {

        return $this->render('juan/index.html.twig', [
            'controller_name' => 'JuanController',
        ]);
    }
}
