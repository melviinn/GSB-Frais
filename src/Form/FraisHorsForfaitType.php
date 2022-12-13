<?php

namespace App\Form;

use App\Entity\LigneFraisHorsForfait;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\NotBlank;


class FraisHorsForfaitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelle', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Libellé', 
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ->add('date', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Date du nouveau hors forfait...'
                ],
                'label' => 'Date', 
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ->add('montant', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Montant', 
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => LigneFraisHorsForfait::class,
        ]);
    }
}
