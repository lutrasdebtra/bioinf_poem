<?php
// src/AppBundle/Controller/ExperimentController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ExperimentController extends Controller {
    /**
     * @Route("/experiment/index")
     */
    public function indexAction() {
        return $this->render('experiment/index.html.twig');
    }

    /**
     * @Route("/experiment/new")
     */
    public function newAction() {
        return $this->render('experiment/new.html.twig');
    }
}
?>