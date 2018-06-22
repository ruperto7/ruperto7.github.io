<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FootballLeaguesController extends Controller
{
    /**
     * @Route("/football/leagues", name="football_leagues")
     */
    public function index()
    {
        return $this->render('football_leagues/index.html.twig', [
            'controller_name' => 'FootballLeaguesController',
        ]);
    }
}
