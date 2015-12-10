<?php
// src/AppBundle/Form/Type/ExperimentType.php
namespace AppBundle\Form\Type;

use AppBundle\Entity\RNASeq;
use AppBundle\Form\Type\RNASeqType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ExperimentType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('title', TextType::class)
            ->add('expType', ChoiceType::class, 
                ['choices' => [''=>'','RNASeq' => 'RNASeq', 'Metabolomics' => '', 'DNASeq' => '', 'Proteomics' => '']])
                        ->add('rnaseqs', CollectionType::class, 
                ['entry_type' => RNASeqType::class,'allow_add' => true, 
                'by_reference' => false, 'allow_delete' => true])
            ->add('sampleNums', CollectionType::class,
                ['entry_type' => IntegerType::class ,'allow_add' => true, 'prototype' => true ])
            ->add('save', SubmitType::class, ['label' => 'Create Experiment']);
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Experiment',
        ));
    }
}
?>