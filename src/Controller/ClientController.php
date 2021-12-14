<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{
    /**
     * @Route("/client", name="client")
     */
    public function index(): Response
    {
        return $this->render('client/index.html.twig', [
        ]);
    }

    /**
     * @Route("/ajouter-client", name="ajouter-client")
     */
    public function ajouter(): Response
    {
        return $this->render('client/ajouter.html.twig', [
        ]);
    }

    /**
     * @Route("/edit-client", name="edit-client")
     */
    public function edit(): Response
    {
        return $this->render('client/edit.html.twig', [
        ]);
    }
}
