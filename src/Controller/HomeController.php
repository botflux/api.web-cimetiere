<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\CommuneRepository;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(CommuneRepository $repo)
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'communes' => []/* $repo->findAll() */
        ]);
    }
}
