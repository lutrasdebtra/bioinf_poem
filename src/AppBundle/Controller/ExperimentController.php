<?php
// src/AppBundle/Controller/ExperimentController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Experiment;
use AppBundle\Entity\RNASeq;
use AppBundle\Form\Type\ExperimentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ExperimentController extends Controller {
    /**
     * @Route("/experiment/index", name="experiment_index")
     */
    public function indexAction() {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Experiment');
        $experiments = $repository->findAll();
        return $this->render('experiment/index.html.twig',['experiments' => $experiments]);
    }

    /**
     * @Route("/experiment/new", name="experiment_new")
     */
    public function newAction(Request $request) {
        $experiment = new Experiment();

        $form = $this->createForm(ExperimentType::class, $experiment);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $experiment = $form->getData(); // <===== Fill your entity
            $em->persist($experiment); //Here, just persist the experiment after filled it.

            // Unnecessary, doctrine will persist automatically thanks your OneToMany relation.
            $em->flush();
            return $this->redirectToRoute('experiment_index');
        }


        return $this->render('experiment/form.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/experiment/show/{id}", name="experiment_show")
     */
    public function showAction($id) {
        return $this->render('experiment/show.html.twig');
    }

    /**
     * @Route("/experiment/edit/{id}", name="experiment_edit")
     */
    public function editAction(Request $request, $id) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Experiment');
        $experiment = $repository->find($id);

        $form = $this->createForm(ExperimentType::class, $experiment);

        $form->handleRequest($request);

        return $this->render('experiment/form.html.twig', array('form' => $form->createView()));
    }

}
?>