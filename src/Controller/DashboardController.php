<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'home_page')]
    public function homepage() {
        return $this->render('dashboard/homepage.html.twig');
    }

    // @TODO - #FUTURE Caching, oare putem face ceva pt marcel?
    //AdapterInterface $cache
    //$item = $cache->getItem('markdown_'.md5($articleContent));
    //if (!$item->isHit()) {
    //$item->set($markdown->transform($articleContent));
    //$cache->save($item);
    //}
    //$articleContent = $item->get();

    #[Route('/dashboard', name: 'dashboard')]
    public function dashboard() {
        return $this->render('dashboard/dashboard.html.twig');
    }

    #[Route('/marcel', name: 'marcel')]
    public function marcel(LoggerInterface $logger) {
        // @TODO - #FUTURE aici poti sa faci cu JsonResponse cand vrei sa arati proper metrics pe care nush cum ii iei :))
        // SAU CARE SUNT e tarziu sunt obosit
        $logger->info("Aici voi pune useful data;");

        return new Response('200 okei bos, totul merge bine, uite-te la metrici:');
    }
}