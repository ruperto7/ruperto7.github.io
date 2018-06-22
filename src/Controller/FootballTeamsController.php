<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FootballTeamsController extends Controller
{
    /**
     * @Route("/football/teams", name="football_teams")
     */
    public function index()
    {
        return $this->render('football_teams/index.html.twig', [
            'controller_name' => 'FootballTeamsController',
        ]);
    }
}
