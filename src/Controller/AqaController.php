<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AqaController extends AbstractController
{
    #[Route('/aqa', name: 'app_aqa' , methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('aqa/index.html.twig', [
            'controller_name' => 'AqaController',
        ]);
    }
}
