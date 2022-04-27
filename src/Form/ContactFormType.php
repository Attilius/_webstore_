<?php

namespace App\Form;

use App\Entity\CustomerContact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildform(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, ['label' => 'Name','required' => false])
            ->add('email', EmailType::class, ['label' => 'E-mail címed','required' => false])
            ->add('message', TextareaType::class, ['label' => 'Message','required' => false])
            ->add('submit', SubmitType::class, ['label' => 'Send','attr' => ['class' => 'btn-success']])
        ;
    }
}