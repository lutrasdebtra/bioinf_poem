<?php
// src/AppBundle/Controller/ExperimentController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
    public function newAction() {
        return $this->render('experiment/new.html.twig');
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