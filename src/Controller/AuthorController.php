<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthorController extends AbstractController
{
    
    
    #[Route('/author/{name}', name: 'show_Author')]
    public function ShowAuthor(string $name): Response
    {
        return $this->render('author/show.html.twig', 
        [      'name' => $name
        ]);
    }
   
    #[Route('/author', name: 'authors_list')]
    public function listAuthors():Response
    {
     $Authors = [

        ['id' => 1, 'picture' => '/images/vh.png', 'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100],
  
        ['id' => 2, 'picture' => '/images/ws.png', 'username' => 'William Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200],
  
        ['id' => 3, 'picture' => '/images/th.png', 'username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300],
        ];
        return $this->render('author/list.html.twig',[
            'Authors'=>$Authors,
        ]);
    }
    #[Route('/author/details/{id}', name:'author_details')]
    public function details(int $id):Response
    {
        $authors = [

           1 => ['id' => 1, 'picture' => '/images/vh.png', 'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100],
      
           2 => ['id' => 2, 'picture' => '/images/ws.png', 'username' => 'William Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200],
      
           3 => ['id' => 3, 'picture' => '/images/th.png', 'username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300],
            ];
        $author = $authors[$id];
           
        return $this->render('author/showList.html.twig', [
              'author' => $author,
        ]);
    }
}

