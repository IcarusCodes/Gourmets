<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'home_page')]
    public function homepage() {
        return $this->render('dashboard/homepage.html.twig');
    }

    #[Route('/dashboard', name: 'dashboard')]
    public function dashboard() {
        return $this->render('dashboard/dashboard.html.twig');
    }
}