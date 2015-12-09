<?php
// src/AppBundle/Controller/ExperimentController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Experiment;
use AppBundle\Entity\RNASeq;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ExperimentController extends Controller {
    /**
     * @Route("/experiment/index", name="experiment_index")
     */
    public function indexAction() {
        return $this->render('experiment/index.html.twig');
    }

    /**
     * @Route("/experiment/new", name="experiment_new")
     */
    public function newAction(Request $request) {
        $experiment = new Experiment();

        $form = $this->createFormBuilder($experiment)
            ->add('title', TextType::class)
            ->add('expType', ChoiceType::class, ['choices' => [''=>'','RNASeq' => '', 'Metabolomics' => '', 'DNASeq' => '', 'Proteomics' => ''], 'mapped' => false])
            ->add('save', SubmitType::class, array('label' => 'Create Experiment'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($experiment);
            $em->flush();
            return $this->redirectToRoute('experiment_index');
        }

        return $this->render('experiment/new.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/experiment/show/{experiment}", name="experiment_show")
     */
    public function showAction($experiment) {
        return $this->render('experiment/show.html.twig');
    }

    /**
     * @Route("/experiment/edit/{experiment}", name="experiment_edit")
     */
    public function editAction($experiment) {
        return $this->render('experiment/edit.html.twig');
    }

}
?>