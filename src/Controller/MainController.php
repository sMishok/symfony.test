<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        $slides = [
            ['img_path' => 'http://optvideo.com/ns/images/banners/all.jpg'],
            ['img_path' => 'http://optvideo.com/ns/images/banners/all.jpg'],
            ['img_path' => 'http://optvideo.com/ns/images/banners/all.jpg'],
        ];
        $banners = [
          [
              'title' => 'Title 1',
              'img_path' => 'http://optvideo.com/ns/images/banners/791.jpg',
              'content' => 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'
          ],
            [
                'title' => 'Title 2',
                'img_path' => 'http://optvideo.com/ns/images/banners/789.jpg',
                'content' => 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'
            ],
            [
                'title' => 'Title 3',
                'img_path' => 'http://optvideo.com/ns/images/banners/790.jpg',
                'content' => 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'
            ],
            [
                'title' => 'Title 4',
                'img_path' => 'http://optvideo.com/ns/images/banners/788.jpg',
                'content' => 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'
            ],
        ];
        $news = [
            [
                'img_path' => 'http://optvideo.com/ns/images/news/19may.jpg',
                'content' => 'Some quick example text to build on the card title and make up the bulk of
                            the card\'s content.'
            ],
            [
                'img_path' => 'http://optvideo.com/ns/images/news/tula18.jpeg',
                'content' => 'Some quick example text to build on the card title and make up the bulk of
                            the card\'s content.'
            ],
            [
                'img_path' => 'http://optvideo.com/ns/images/news/sp141.jpeg',
                'content' => 'Some quick example text to build on the card title and make up the bulk of
                            the card\'s content.'
            ],
        ];
        return $this->render('main/main.html.twig', compact('slides', 'banners', 'news'));
    }
}
