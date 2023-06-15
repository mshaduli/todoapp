<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ThemeController extends AbstractController
{
    #[Route('/theme/project', name: 'app_theme_project')]
    public function index(): Response
    {
        return $this->render('theme/index.html.twig', [
            'controller_name' => 'ThemeController',
        ]);
    }

    #[Route('/theme/project/new', name: 'app_theme_project_add')]
    public function new(): Response
    {
        return $this->render('theme/new.html.twig', [
            'controller_name' => 'ThemeController',
        ]);
    }


    #[Route('/theme/shop', name: 'app_theme_products')]
    public function shop(): Response
    {
        return $this->render('theme/shop.html.twig', [
            'controller_name' => 'ThemeController',
        ]);
    }
}
