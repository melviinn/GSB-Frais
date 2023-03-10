<?php

namespace App\Form;

use App\Entity\FraisForfait;
use App\Entity\FicheFrais;
use App\Entity\LigneFraisForfait;
use App\Entity\User;
use App\Repository\FraisForfaitRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;


class LigneFraisForfaitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options, ): void
    {
        $builder
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
                        'message' => 'Veuillez renseigner une date d\'engagement valide...',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control mb-3',
                    'placeholder' => 'Choisissez la période d\'engagement...',
                ],
                'label' => 'Période d\'engagement',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ->add('libelleKM', TextType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-control mb-3',
                    'placeholder' => 'Frais Kilométrique (0.62€)',
                    'readonly' => true,
                ],
                'label' => 'Libellé',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ->add('libelleREP', TextType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-control mb-3',
                    'placeholder' => 'Repas Restaurant (25€)',
                    'readonly' => true,
                ],
                'label' => false, 
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ->add('libelleNUI', TextType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-control mb-3',
                    'placeholder' => 'Nuitées Hôtel (80€)',
                    'readonly' => true,
                ],
                'label' => false, 
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ->add('libelleETP', TextType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-control mb-3',
                    'placeholder' => 'Forfait Étape (110€)',
                    'readonly' => true,
                ],
                'label' => false, 
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ->add('montantKM', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-control mb-3',
                ],
                'label' => 'Quantité',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ->add('montantREP', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => false,
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ->add('montantNUI', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => false,
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ->add('montantETP', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => false,
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
}
