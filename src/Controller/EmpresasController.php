<?php

namespace App\Controller;

use App\Entity\Empresas;
use App\Repository\EmpresasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmpresasController extends AbstractController
{
    #[Route('/', name: 'visualizar_empresas', methods: ['GET'])]
    public function index(EmpresasRepository $empresasRepository): Response
    {
        $empresas = $empresasRepository->findAll();
        return $this->render('empresas/index.html.twig', [
            'empresas' => $empresas
        ]);
    }

    #[Route('/inserir', name: 'inserir_empresas_exibicao', methods: ['GET'])]
    public function exibirInclusao(EmpresasRepository $empresasRepository):Response
    {
        $empresas = $empresasRepository->findAll();
        return $this->render('empresas/exibir_inclusao.html.twig', [
            'empresas' => $empresas
        ]);
    }

}
