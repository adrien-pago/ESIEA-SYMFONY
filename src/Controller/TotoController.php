<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TotoController extends AbstractController
{
    #[Route('/toto', name: 'toto_route')]
    public function showToto(): Response
    {
        $date = new \DateTime();
        $dateFormatee = $date->format('d/m/Y H:i:s');

        return $this->render('toto/index.html.twig', [
            'date' => $dateFormatee
        ]);
    }
} 