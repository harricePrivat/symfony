<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        $articles = [
            ['id'=>'1','title' => 'Article 1', 'content' => 'Contenu de l\'article 1'],
            ['id'=>'2','title' => 'Article 2', 'content' => 'Contenu de l\'article 2'],
            ['id'=>'3','title' => 'Article 3', 'content' => 'Contenu de l\'article 3'],
            ['id'=>'4','title' => 'Article 4', 'content' => 'Contenu de l\'article 4'],
            ['id'=>'5','title' => 'Article 5', 'content' => 'Contenu de l\'article 5'],
            ['id'=>'6','title' => 'Article 5', 'content' => 'Contenu de l\'article 6'],
            ['id'=>'7','title' => 'Article 5', 'content' => 'Contenu de l\'article 7 ce qu\'on teste ici c\'est tailwind css'],
            ['id'=>'8','title' => 'Article 4', 'content' => 'Contenu de l\'article 4'],
            ['id'=>'9','title' => 'Article 5', 'content' => 'Contenu de l\'article 5'],
            ['id'=>'10','title' => 'Article 5', 'content' => 'Contenu de l\'article 6'],
            ['id'=>'11','title' => 'Article 5', 'content' => 'Contenu de l\'article 7'],

        ];
        //$articles= [];
        return $this->render('test/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
