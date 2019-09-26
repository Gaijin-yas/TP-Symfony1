<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DynamicPageController extends AbstractController
{
    /**
     * @Route(
     *     "/annoucements/{id}",
     *     name="detail",
     *     defaults={"id"=1},
     *     requirements={"id" = "\d+"}
     * )
     */
    public function index(int $id)
    {


        $annonces=[];
        for($i=0; $i<10; $i++) {
            $a[] = [
                'id' => $i,
                "title" => "blabla",
                "content" => "on",
                "price" => $i ** 3,
                "createDate" => new \DateTime()
            ];
        }

        return $this->render('liste.html.twig', [
            'controller_name' => 'DynamicPageController',
            'annonces' => $a
        ]);
    }
}