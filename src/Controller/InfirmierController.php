<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InfirmierController extends AbstractController
{
    #[Route('/infirmier', name: 'app_infirmier')]
    public function index(): Response
    {
        return $this->render('infirmier/index.html.twig');
    }
}
