<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Notification\ContactNotification;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AproposController extends AbstractController
{
    /**
     * @Route("/apropos", name="apropos")
     */
    public function index(Request $request, ContactNotification $notification): Response
    {
        $contact = new Contact;

        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $notification->notify($contact);

            $this->addFlash('success_mail_sent', 'Votre demande a bien été enregistrée, notre équipe va vous répondre, merci pour votre patience !');
            
            return $this->redirectToRoute('apropos');
        }

        return $this->render('apropos/index.html.twig', [
            'controller_name' => 'AproposController',
            'formContact' => $form->createView(),
        ]);
    }
}
