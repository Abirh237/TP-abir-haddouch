<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Book;
use App\Form\BookType;

class DummyController extends AbstractController
{
    #[Route('/dummy', name: 'app_dummy')]
    public function index(): Response
    {
        return $this->render('dummy/index.html.twig', [
            'controller_name' => 'DummyController',
        ]);
    }
    #[Route(path:'/home',name: 'app_home')]
    public function home(): Response {
        $text = "Hello This is home !";
        $tabYear = [2020,2021,2022,2023];
        return $this->render(view: 'dummy/home.html.twig',parameters: [
            "text"=> $text,
            "years"=> $tabYear

        ]);}


     #[Route(path:'/news', name: 'app_news')] 
     public function news(): Response {
        $text = "Hello This is news !";
        $tabYear = [2020,2021,2022,2023];
        return $this->render(view: 'dummy/home.html.twig',parameters:[
            "text"=> $text,
            "years"=> $tabYear
        ] );}


            #[Route(path:'/contact', name: 'app_contact')] 
     public function contact(): Response {
        $text = "Hello This is contact !";
        $tabYear = [2020,2021,2022,2023];
        return $this->render(view: 'dummy/home.html.twig',parameters:[
            "text"=> $text,
            "years"=> $tabYear
        ] );}


     #[Route(path:'/about', name: 'app_about')] 
     public function about(): Response {
        $text = "Hello This is about !";
        $tabYear = [2020,2021,2022,2023];
        return $this->render(view: 'dummy/home.html.twig',parameters:[
            "text"=> $text,
            "years"=> $tabYear
        ] );}
        
            #[Route(path:'/add-book', name: 'app_book_add')] 
     public function addBook(): Response {

        $book = new Book();
       
        $bookForm = $this->createForm(BookType::class, $book);
        return $this->render('dummy/index.html.twig',[
        
            "bookForm" => $bookForm->createView()
        ] );
    }
    }

