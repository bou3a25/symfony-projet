<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoitureController extends AbstractController
{
    /**
     * @Route("/voiture", name="voiture")
     */
    public function index(): Response
    {
        return $this->render('voiture/index.html.twig', [
        ]);
    }

    /**
     * @Route("/ajouter-voiture", name="ajouter-voiture")
     */
    public function ajouter(): Response
    {
        return $this->render('voiture/ajouter.html.twig', [
        ]);
    }

    /**
     * @Route("/edit-voiture", name="edit-voiture")
     */
    public function edit(): Response
    {
        return $this->render('voiture/edit.html.twig', [
        ]);
    }
}
