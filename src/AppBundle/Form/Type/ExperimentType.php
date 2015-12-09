<?php
// src/AppBundle/Form/Type/ExperimentType.php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ExperimentType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('experiment')
            ->add('title', TextType::class)
            ->add('expType')
            ->add('save', SubmitType::class);
    }
}
?>