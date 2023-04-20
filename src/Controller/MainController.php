<?php

namespace App\Controller;

use App\Service\FashionApi;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController {
    
    /**
     * 
     * @Route ("/", name="app_main_home") 
     */
    
    public function home(FashionApi $fashionApi) {

       // dd($fashionApi->fetchNews());
        return $this->render('main/home.html.twig');

    }
}