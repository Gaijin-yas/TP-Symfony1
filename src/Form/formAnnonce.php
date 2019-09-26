<?php
/**
 * Created by PhpStorm.
 * User: sano
 * Date: 25/09/2019
 * Time: 11:46
 */

namespace App\Form;

use App\DTO\dtoAnnonce;
use function Sodium\add;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class formAnnonce extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, ['required' => true])
            ->add('content', TextareaType::class)
            ->add('prices', NumberType::class, ['required' => true])
            ->add('createDate', DateType::class);


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setdefaults([
            'data_class' => dtoAnnonce::class
        ]);
    }
}