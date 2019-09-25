<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DynamicPageController extends AbstractController
{
    /**
     * @Route(
     *     "/annoucements/{page}",
     *     name="page",
     *     defaults={"page"=1},
     *     requirements={"id"="[0-9]+"},
     * )
     */
    public function index()
    {
        $a = [
            [
                'id'           => '1',
                'title'        => '1ere annonce',
                'content'      => 'contenu de annonce',
                'price'        => '10euros',
                'created' => 'newDatetime',
            ],

            [
                'id'           => '2',
                'title'        => '2eme annonce',
                'content'      => 'contenu de annonce',
                'price'        => '20euros',
                'created' => 'newDatetime',
            ],

            [
            'id'           => '3',
            'title'        => '3eme annonce',
            'content'      => 'contenu de annonce',
            'price'        => '30euros',
            'created' => 'newDatetime',
            ],

            [
                'id'           => '4',
                'title'        => '4eme annonce',
                'content'      => 'contenu de annonce',
                'price'        => '40euros',
                'created' => 'newDatetime',
            ],

            [
                'id'           => '5',
                'title'        => '5eme annonce',
                'content'      => 'contenu de annonce',
                'price'        => '50euros',
                'created' => 'newDatetime',
            ],

            [
                'id'           => '6',
                'title'        => '6eme annonce',
                'content'      => 'contenu de annonce',
                'price'        => '60euros',
                'created' => 'newDatetime',
            ],

            [
                'id'           => '7',
                'title'        => '7eme annonce',
                'content'      => 'contenu de annonce',
                'price'        => '70euros',
                'created' => 'newDatetime',
            ],

            [
                'id'           => '8',
                'title'        => '8eme annonce',
                'content'      => 'contenu de annonce',
                'price'        => '80euros',
                'created' => 'newDatetime',
            ],

            [
                'id'           => '9',
                'title'        => '9eme annonce',
                'content'      => 'contenu de annonce',
                'price'        => '90euros',
                'created' => 'newDatetime',
            ],

            [
                'id'           => '10',
                'title'        => '10eme annonce',
                'content'      => 'contenu de annonce',
                'price'        => '100euros',
                'created' => 'newDatetime',
            ]
        ];

        return $this->render('liste.html.twig', [
            'controller_name' => 'DynamicPageController',
            'annonces' => $a
        ]);
    }
}