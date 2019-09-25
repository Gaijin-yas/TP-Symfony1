<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use symfony\Component\HttpFondation\RedirectReponse;

class DynamicIDController extends AbstractController
{

    /**
     * @Route(
     *     "/annoucements/{id}/details",
     *     name="id",
     *     requirements={"id"="[0-9]+"},
     * )
     * @param int $id
     * @return Response
     */
    public function index3(int $id)
    {
        return $this->render('detail.html.twig', [
            'controller_name' => 'DynamicIDController',
        ]);
    }
}