<?php
// src/AppBundle/Form/Type/ExperimentType.php
namespace AppBundle\Form\Type;

use AppBundle\Entity\RNASeq;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ExperimentType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('title', TextType::class)
            ->add('expType', ChoiceType::class, ['choices' => [''=>'','RNASeq' => new RNASeq(), 'Metabolomics' => '', 'DNASeq' => '', 'Proteomics' => ''], 'mapped' => false])
            ->add('save', SubmitType::class, array('label' => 'Create Experiment'));
    }
}
?>