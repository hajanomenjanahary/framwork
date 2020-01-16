<?php

namespace App\Form;

use App\Entity\LigneCommande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class LigneCommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateCom')
            ->add('QteCom')
            ->add('Client', EntityType::class,[
                'class'=>Client::class,
                'choice_label'=>'nom'
                ])
            ->add('Produit')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => LigneCommande::class,
        ]);
    }
}
