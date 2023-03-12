<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class ChoixValidationFicheFraisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idVisiteur', EntityType::class, [
                'class' => User::class,
                'choice_label' => function(User $user){
                    return sprintf('%s', $user->getPrenom());
                },
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Visiteur',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ->add('mois', ChoiceType::class, [
                'choices' => [
                    'Janvier' => 1,
                    'Février' => 2,
                    'Mars' => 3,
                    'Avril' => 4,
                    'Mai' => 5,
                    'Juin' => 6,
                    'Juillet' => 7,
                    'Août' => 8,
                    'Septembre' => 9,
                    'Octobre' => 10,
                    'Novembre' => 11,
                    'Décembre' => 12,
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez choisir un mois d\'engagement valide...',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control mb-3',
                    'placeholder' => 'Choisissez la période d\'affichage...',
                ],
                'label' => 'Période d\'affichage',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
