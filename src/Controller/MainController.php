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
            ['img_path' => '/uploads/slider/test-slider.jpg'],
            ['img_path' => '/uploads/slider/test-slider.jpg'],
            ['img_path' => '/uploads/slider/test-slider.jpg'],
        ];
        $banners = [
          [
              'title' => 'Title 1',
              'img_path' => '/uploads/banner/test-banner-1.jpg',
              'content' => 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'
          ],
            [
                'title' => 'Title 2',
                'img_path' => '/uploads/banner/test-banner-2.jpg',
                'content' => 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'
            ],
            [
                'title' => 'Title 3',
                'img_path' => '/uploads/banner/test-banner-3.jpg',
                'content' => 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'
            ],
            [
                'title' => 'Title 4',
                'img_path' => '/uploads/banner/test-banner-4.jpg',
                'content' => 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'
            ],
        ];
        $news = [
            [
                'img_path' => '/uploads/news/test-news-1.jpg',
                'content' => 'Some quick example text to build on the card title and make up the bulk of
                            the card\'s content.'
            ],
            [
                'img_path' => '/uploads/news/test-news-2.jpeg',
                'content' => 'Some quick example text to build on the card title and make up the bulk of
                            the card\'s content.'
            ],
            [
                'img_path' => '/uploads/news/test-news-3.jpeg',
                'content' => 'Some quick example text to build on the card title and make up the bulk of
                            the card\'s content.'
            ],
        ];
        return $this->render('main/main.html.twig', compact('slides', 'banners', 'news'));
    }
}
