<?php

namespace App\Form;

use App\Entity\Dessert;
use App\Entity\Entree;
use App\Entity\Plat;
use App\Entity\Reservation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('heure')
            ->add('personne')
            ->add('entrees',EntityType::class, [
                'class' => Entree::class,
                'expanded' => false,
                'multiple' => true
            ])
            ->add('plats',EntityType::class, [
                'class' => Plat::class,
                'expanded' => false,
                'multiple' => true
            ])
            ->add('desserts',EntityType::class, [
                'class' => Dessert::class,
                'expanded' => false,
                'multiple' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
