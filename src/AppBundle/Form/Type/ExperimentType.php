<?php
// src/AppBundle/Form/Type/ExperimentType.php
namespace AppBundle\Form\Type;

use AppBundle\Entity\RNASeq;
use AppBundle\Entity\DNASeq;
use AppBundle\Entity\Metabolomic;
use AppBundle\Form\Type\RNASeqType;
use AppBundle\Form\Type\DNASeqType;
use AppBundle\Form\Type\MetabolomicType;
use AppBundle\Form\Type\ProteomicType;
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
                ['choices' => [''=>'','RNASeq' => 'RNASeq', 'Metabolomics' => 'Metabolomics', 'DNASeq' => 'DNASeq', 'Proteomics' => 'Proteomics']])

            ->add('rnaseqs', CollectionType::class, 
                ['entry_type' => RNASeqType::class,'allow_add' => true, 
                'by_reference' => false, 'allow_delete' => true])
            ->add('dnaseqs', CollectionType::class, 
                ['entry_type' => DNASeqType::class,'allow_add' => true, 
                'by_reference' => false, 'allow_delete' => true])
            ->add('metabolomics', CollectionType::class, 
                ['entry_type' => MetabolomicType::class,'allow_add' => true, 
                'by_reference' => false, 'allow_delete' => true])
            ->add('proteomics', CollectionType::class, 
                ['entry_type' => ProteomicType::class,'allow_add' => true, 
                'by_reference' => false, 'allow_delete' => true])
            
            ->add('sampleNums', CollectionType::class,
                ['entry_type' => IntegerType::class ,'allow_add' => true, 'allow_delete' => true, 'by_reference' => false, 'prototype' => true, 'label' => 'Sample Number(s)' ])
            ->add('save', SubmitType::class, ['label' => 'Submit', 'attr' => array('class' => 'btn btn-success')]);
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Experiment',
        ));
    }
}
?>