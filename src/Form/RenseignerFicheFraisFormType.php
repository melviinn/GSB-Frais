<?php

namespace App\Form;

use App\Entity\Etat;
use App\Entity\FicheFrais;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class RenseignerFicheFraisFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idVisiteur', EntityType::class, [
                'class' => User::class,
                'choice_label' => function(User $user){
                    return sprintf('(%d) %s', $user->getId(), $user->getPrenom());
                },
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Visiteur',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ->add('mois', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez renseigner une valeur',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Mois',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
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
            ->add('montantValide', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez renseigner une valeur',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Montant validé', 
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ->add('dateModif', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez renseigner une valeur',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Date Modification', 
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ->add('idEtat', EntityType::class, [
                'class' => Etat::class,
                'choice_label' => function(Etat $etat){
                    return sprintf('(%d) %s', $etat->getId(), $etat->getLibelle());
                },
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Etat', 
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
