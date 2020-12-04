<?php

namespace App\Controller;

use App\Entity\CategorieArt;
use App\Entity\Contact;
use App\Entity\Oeuvre;
use App\Form\ContactType;
use App\Form\OeuvreType;
use App\Notification\ContactNotification;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class GalerieController extends AbstractController
{
    /**
     * @Route("/galerie", name="galerie")
     */
    
    public function index(Request $request, ContactNotification $notification): Response
    {
        $arts = $this->getDoctrine()->getRepository(Oeuvre::class)->findAll();
        $categories = $this->getDoctrine()->getRepository(CategorieArt::class)->findAll();

        $contact = new Contact;

        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $notification->notify($contact);

            $this->addFlash('success_mail_sent', 'Votre demande a bien été enregistrée, notre équipe va vous répondre, merci pour votre patience !');
        
            return $this->redirectToRoute('galerie');
        }

        return $this->render('galerie/index.html.twig', [
            'controller_name' => 'GalerieController',
            'formContact' => $form->createView(),
            'categories' => $categories,
            'arts' => $arts,
        ]);
    }

}