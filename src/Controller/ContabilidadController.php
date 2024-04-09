<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContabilidadController extends AbstractController{

    #[Route('/', name:'contabilidad_card')]
    public function contabilidadCard() : Response
    {
        return $this->render('card.html.twig');
    }

    #[Route('/contabilidad', name:'contabilidad')]
    public function index():Response{
        return $this->render('main.html.twig');
    }

    #[Route('/contabilidad/section1', name:'contabilidad_section1')]
    public function section1() : Response{
        return $this->render('section1.html.twig');
    }
    
    #[Route('/contabilidad/section2', name:'contabilidad_section2')]
    public function section2() : Response{
        return $this->render('section2.html.twig');
    }

    #[Route('/contabilidad/section3', name:'contabilidad_section3')]
    public function section3() : Response{
        return $this->render('section3.html.twig');
    }
}