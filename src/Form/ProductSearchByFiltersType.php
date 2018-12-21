<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductSearchByFiltersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category', ChoiceType::class,
                ['required' => false,
                    'choices' => [
                        'Téléphone' => 'phone',
                        'Ordinateur' => 'computer',
                        'Télévision' => 'Tv',
                        'Tablette' => 'Tablet'
                    ]

                ])
            ->add('brand', ChoiceType::class,
                ['required' => false,
                    'choices' => [
                        'Lenovo'=> 'Lenovo',
                        'Asus' => 'Asus',
                        'Dell' => 'Dell',
                        'HP' => 'HP',
                        'Apple' => 'Apple',
                        'Acer' => 'Acer',
                        'Samsung' => 'Samsung']])
            ->add('need', ChoiceType::class,
                ['required' => false,
                    'choices' => [
                        'Video' => 'Video',
                        'Bureautique' => 'office',
                        'Gaming' => 'Gaming',
                        'Design' => 'Design'
                    ]])
            ->add('energyClass', ChoiceType::class,
                ['required' => false,
                    'choices' => [
                        'A' => 'A',
                        'B' => 'B',
                        'C' => 'C',
                        'D' => 'D',
                        'E' => 'E',
                        'F' => 'F'
                    ]])
            ->add('ges', ChoiceType::class,
                ['required' => false,
                    'choices' => [
                        'A' => 'A',
                        'B' => 'B',
                        'C' => 'C',
                        'D' => 'D',
                        'E' => 'E',
                        'F' => 'F'
                    ]])
        ->add('submit', SubmitType::class,[
            'label' => 'Rechercher']);
    }

}
