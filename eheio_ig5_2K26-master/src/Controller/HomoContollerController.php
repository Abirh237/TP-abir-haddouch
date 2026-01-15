<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomoContollerController extends AbstractController
{
   # #[Route('/homo/contoller', name: 'app_homo_contoller')]
    public function index(): Response
    {
        return $this->render('homo_contoller/index.html.twig', [
            'controller_name' => 'HomoContollerController',
        ]);
    }
     #[Route('/welcom', name: 'app_welcom')]
    public function welcom(): Response
    {
        return new Response("hello world");
    }

     #[Route('/homo/{smia}', name: 'app_index')]
    public function homo(string $smia): Response
    {
        return new Response("hello".$smia."!");
    }
      
     #[Route('/
     /{abir}', name: 'app_bonjour')]
    public function bonjour(string $abir="Anonymous"): Response
    {
        return new Response("hello".$abir."!");
    }



}
