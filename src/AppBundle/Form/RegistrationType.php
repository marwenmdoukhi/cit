<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')->add('prenom')->add('matricule') ; 

        ;
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getNom()
    {
        return 'app_user_registration';
    }

    public function getPrenom()
    {
        return 'app_user_registration';
    }

    public function getMatricule()
    {
        return 'app_user_registration';
    }

}