<?php

namespace App\Controller;

use App\DTO\TP;
use App\Form\FormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     * @param $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        $TP = new TP();
        $form = $this->createForm(FormType::class, $TP);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($contact);
            // $entityManager->flush();
            return $this->redirectToRoute('home');
        }
        return $this->render('contact.html.twig', [
            'controller_name' => 'ContactController',
            'form'=>$form->createView(),
        ]);
    }
}
