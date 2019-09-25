<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePage extends AbstractController
{
    /**
     * @Route(
     *     "/",
     *     name="home",
     * )
     */


    public function index()
    {
        $b = [
            [
                'id' => '01',
                'title' => '1ere annonce',

            ],
            [
                'id' => '02',
                'title' => '2eme annonce',
            ]
        ];


        return $this->render('home.html.twig', [
            'controller_name' => 'HomePage',
            'tableaux' => $b
        ]);
    }

}
