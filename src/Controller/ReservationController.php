<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
        ]);
    }
    /**
     * @Route("/ajouter-reservation", name="ajouter-reservation")
     */
    public function ajouter(): Response
    {
        return $this->render('reservation/ajouter.html.twig', [
        ]);
    }

    /**
     * @Route("/edit-reservation", name="edit-reservation")
     */
    public function edit(): Response
    {
        return $this->render('reservation/edit.html.twig', [
        ]);
    }
}
