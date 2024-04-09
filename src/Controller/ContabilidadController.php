<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContabilidadController extends AbstractController{
    
    #[Route('/card', name:'contabilidad_card')]
    public function contabilidadCard() : Response
    {
        return $this->render('card.html.twig');
    }

    #[Route('/contabilidad', name:'contabilidad_main')]
    public function contabilidadMain() : Response
    {
        return $this->render('main.html.twig');
    }
}