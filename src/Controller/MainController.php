<?php

namespace App\Controller;

use App\Repository\Cart2Repository;
use App\Service\FashionApi;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController {
    
    /**
     * 
     * @Route ("/", name="app_main_home") 
     */
    
    public function home(FashionApi $fashionApi, Cart2Repository $cart2Repository) {

       // dd($fashionApi->fetchNews());

       $cart = $cart2Repository->find(1);
       $cartContent = $cart->getProducts(); 

       dd($cartContent);

        return $this->render('main/home.html.twig');

    }
}