<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BraveChefController extends AbstractController
{
    #[Route('/brave/chef', name: 'app_brave_chef')]
    public function index(): Response
    {
        return $this->render('brave_chef/index.html.twig', [
            'controller_name' => 'BraveChefController',
        ]);
    }
}
