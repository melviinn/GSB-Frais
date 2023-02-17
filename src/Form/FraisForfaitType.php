<?php

namespace App\Form;

use App\Entity\FraisForfait;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;


class FraisForfaitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('libelle', TextType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez renseigner une valeur',
                ]),
            ],
            'attr' => [
                'class' => 'form-control my-4',
                'readonly' => true,
            ],
            'label' => false,
            'label_attr' => [
                'class' => 'form-label mt-4'
            ]
        ])
        ->add('montant', IntegerType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez renseigner une valeur',
                ]),
            ],
            'attr' => [
                'class' => 'form-control',
            ],
            'label' => false,
            'label_attr' => [
                'class' => 'form-label mt-4'
            ]
        ])
    ;
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FraisForfait::class,
        ]);
    }
}
