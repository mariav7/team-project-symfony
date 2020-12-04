<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                'attr' => array(
                     'placeholder' => 'Nom',
                ),
                'label' => false,
             )
        )
            ->add('email', EmailType::class, array(
                'attr' => array(
                     'placeholder' => 'Email',
                ),
                'label' => false,
             )
        )
            ->add('objet', TextType::class, array(
                'attr' => array(
                     'placeholder' => 'Objet',
                ),
                'label' => false,
             )
        )
            ->add('message', TextareaType::class, array(
                'attr' => array(
                     'placeholder' => 'Message',
                ),
                'label' => false,
             )
        )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
