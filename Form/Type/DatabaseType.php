<?php

namespace ICS\InstallBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;

class DatabaseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class,array(
                'choices' => array(
                    'MySQL'=>'mysql',
                    'PostgreSQL'=>'pgsql',
                    'MongoDB'=>'mongo'
                ),
                'label' => 'Type de base de données'
            ))
            ->add('host', TextType::class,array(
                'label' => 'Adresse du serveur'
            ))
            ->add('port', TextType::class,array(
                'label' => 'Port du serveur'
            ))
            ->add('username', TextType::class,array(
                'label' => 'Utilisateur'
            ))
            ->add('password', PasswordType::class,array(
                'label' => 'Mot de passe'
            ))
            
            ->add('save', SubmitType::class,array(
                'label' => 'Enregistrer'
            ))
        ;
    }
}