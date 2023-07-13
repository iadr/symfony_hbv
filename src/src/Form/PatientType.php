<?php

namespace App\Form;

use App\Entity\Patient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombres')
            ->add('apellidoPaterno')
            ->add('apellidoMaterno')
            ->add('rut')
            ->add('dv')
            ->add('fechaNacimiento')
            ->add('sexo', ChoiceType::class, [
                'choices' => [
                    "Masculino" => 1,
                    "Femenino" => 2,
                    "Indefinido" => 3,
                    "Desconocido" => 4
                ],
            ])
            ->add('nombreSocial')
            ->add('direccion')
            ->add('telefono')
            ->add('email', EmailType::class)
            ->add('estadoCivil', ChoiceType::class, [
                'choices'  => [
                    "Soltero" => 1,
                    "Casado" => 2,
                    "Viudo" => 3,
                    "Separado" => 4
                ],])
            ->add('pais')
            ->add('region')
            ->add('comuna')
            ->add('esUrbano',  ChoiceType::class, [
                'choices'  => [
                    "Urbano" => true,
                    "Rural" => false,
                ],
                'expanded' => true,
                'multiple' => false,
                ])
            ->add('foto')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Patient::class,
        ]);
    }
}