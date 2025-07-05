<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmpresasController extends AbstractController
{
    #[Route('/', name: 'visualizar_empresas', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('empresas/index.html.twig');
    }

    #[Route('/inserir', name: 'inserir_empresas_exibicao', methods: ['GET'])]
    public function exibirInclusao():Response
    {
        return $this->render('empresas/exibir_inclusao.html.twig');
    }


}
