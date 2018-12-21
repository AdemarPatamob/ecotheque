<?php
/**
 * Created by PhpStorm.
 * User: raphael
 * Date: 21/12/18
 * Time: 02:06
 */

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ProductSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('searchField')
        ->add('submit', SubmitType::class,[
        'label' => 'Rechercher']);
    }
}