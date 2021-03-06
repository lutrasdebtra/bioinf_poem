<?php
// src/AppBundle/Form/Type/RNASeqType.php
namespace AppBundle\Form\Type;

use AppBundle\Entity\RNASeq;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RNASeqType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('quality', TextType::class)
            ->add('ribodepleted', ChoiceType::class,['choices' =>['Yes' => true,
        'No' => false], 'choices_as_values' => true, 'expanded' => true, 'multiple' => false])
            ->add('finalQuality', TextType::class, ['label' => 'Final Quality'])
            ->add('sampleNum', IntegerType::class, ['label' => 'Sample Number'])
            ->add('protocolUsed', TextType::class, ['label' => 'Protocol Used'])
            ->add('step1', ChoiceType::class,['choices' =>['Yes' => true,
        'No' => false], 'choices_as_values' => true, 'expanded' => true, 'multiple' => false, 'label' => 'Step One'])
            ->add('step1Result', TextType::class, ['label' => 'Step One Result'])
            ->add('serviceProvider', TextType::class, ['label' => 'Service Provider'])
            ->add('platform', TextType::class)
            ->add('dataFiles', TextType::class, ['label' => 'Data Files'])
            ->add('pipeline', TextType::class)
            ->add('pipelineParameters', TextType::class, ['label' => 'Pipeline Parameters'])
            ->add('resultFiles', TextType::class, ['label' => 'Result Files']);
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\RNASeq'
        ));
    }
}
?>