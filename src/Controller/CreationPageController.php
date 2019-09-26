<?php


namespace App\Controller;
use App\DTO\dtoAnnonce;
use App\Form\formAnnonce;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



class CreationPageController extends  AbstractController
{
    /**
     * @Route(
     *     "/annoucements/add",
     *     name="creation",
     *     methods={"GET", "POST"},
     * )
     * @return  Response
     */
    public function index(Request $request)
    {
        $dtoAnnonce = new dtoAnnonce();
        $form = $this->createForm(formAnnonce::class, $dtoAnnonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             $entityManager = $this->getDoctrine()->getManager();
             $annoucements = new Annoucements($dtoAnnonce);
             $entityManager->persist($annoucements);
             $entityManager->flush();
            return $this->redirectToRoute('home');
        }
        return $this->render('ajout.html.twig', [
            'controller_name' => 'ContactController',
            'form'=>$form->createView(),
        ]);
    }
}



