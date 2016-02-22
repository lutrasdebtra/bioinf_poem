<?php 
// src/AppBundle/Entity/Metabolomic.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="metabolomic")
 */
class Metabolomic {

	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;

    /**
     * Protocol for sample preparation.
     */

	/**
     * @ORM\Column(type="string")
     */
    protected $quality;

    /**
     * @ORM\ManyToOne(targetEntity="Experiment", inversedBy="dnaSeqs")
     * @ORM\JoinColumn(name="experiment_id", referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\Experiment")
     * @Assert\Valid()
     */
    protected $experiment;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quality
     *
     * @param string $quality
     *
     * @return Metabolomic
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Get quality
     *
     * @return string
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set experiment
     *
     * @param \AppBundle\Entity\Experiment $experiment
     *
     * @return Metabolomic
     */
    public function setExperiment(\AppBundle\Entity\Experiment $experiment = null)
    {
        $this->experiment = $experiment;

        return $this;
    }

    /**
     * Get experiment
     *
     * @return \AppBundle\Entity\Experiment
     */
    public function getExperiment()
    {
        return $this->experiment;
    }
}