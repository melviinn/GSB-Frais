<?php

namespace App\Form;

use App\Entity\FicheFrais;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class HorsClassType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nbJustificatifs', IntegerType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez renseigner une valeur',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Nb Justificatifs', 
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ->add('montantValide', IntegerType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez renseigner une valeur',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Montant total', 
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FicheFrais::class,
        ]);
    }
}
