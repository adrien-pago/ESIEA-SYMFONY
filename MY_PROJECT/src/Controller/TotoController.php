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

    return new Response(
      '<!DOCTYPE html>
            <html lang="fr">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <title>Page Toto</title>
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha256-PI8n5gCcz9cQqQXm3PEtDuPG8qx9oFsFctPg0S5zb8g=" crossorigin="anonymous">
                </head>
                <body class="bg-light">
                    <div class="container py-5">
                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white">
                                <h1 class="text-center mb-0">Bienvenue sur la page /toto !</h1>
                            </div>
                            <div class="card-body">
                                <p class="lead text-center">Cette page est générée par le contrôleur TotoController de Symfony.</p>
                                <p class="text-muted text-center fst-italic">Date et heure actuelles : ' . $dateFormatee . '</p>
                            </div>
                            <div class="card-footer text-center text-muted">
                                Cours Symfony - ESIEA
                            </div>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha256-3gQJhtmj7YnV1fmtbVcnAV6eI4ws0Tr48bVZCThtCGQ=" crossorigin="anonymous"></script>
                </body>
            </html>'
    );
  }
}