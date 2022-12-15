<?php

namespace App\Form;

use App\Entity\FraisForfait;
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
                        'message' => 'Veuillez renseigner une valeur',
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
            ->add('FraisForfait', CollectionType::class, [
                'label' => false,
                'entry_type' => FraisForfaitType::class,
                'entry_options' => ['label' => false],
                'attr' => [
                    'class' => 'd-flex mb-4',
                ]
            ])
            ->add('nbJustificatifs', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Nb Justificatifs', 
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ->add('montantValide', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-control mb-2',
                ],
                'label' => 'Montant total (€)', 
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
}
