<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Client;
use App\Entity\Voiture;
use App\Form\ClientType;
use App\Form\VoitureType;
use Doctrine\ORM\Mapping\Entity;
use phpDocumentor\Reflection\PseudoTypes\False_;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('debut')
            ->add('fin')
            ->add('prixparjour')
            ->add('pk_client',EntityType::class,[
                'class' => Client::class,
                'choice_label' => function (Client $client){
                return $client->getNom().' '.$client->getPrenom();},
            'label' => 'Choisir un client existante: ',
            'multiple' => False
            
            ])
            ->add('pk_voiture',EntityType::class,[
                'class' => Voiture::class,
                'choice_label' => function (Voiture $voiture){
                return $voiture->getNom();},
            'label' => 'Choisir un voiture existante: ',
            'multiple' => False
            
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
