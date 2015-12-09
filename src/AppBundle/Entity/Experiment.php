<?php 
// src/AppBundle/Entity/Experiment.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="experiment")
 */
class Experiment {

	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;

	/**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\OneToMany(targetEntity="rnaseq", mappedBy="experiment")
     */
    protected $rnaSeq;

    public function __construct()
    {
        $this->rnaSeq = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="array")
     */
    protected $sampleNums;

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
     * Set title
     *
     * @param string $title
     *
     * @return Experiment
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set sampleNums
     *
     * @param array $sampleNums
     *
     * @return Experiment
     */
    public function setSampleNums($sampleNums)
    {
        $this->sampleNums = $sampleNums;

        return $this;
    }

    /**
     * Get sampleNums
     *
     * @return array
     */
    public function getSampleNums()
    {
        return $this->sampleNums;
    }

    /**
     * Add rnaSeq
     *
     * @param \AppBundle\Entity\rnaseq $rnaSeq
     *
     * @return Experiment
     */
    public function addRnaSeq(\AppBundle\Entity\rnaseq $rnaSeq)
    {
        $this->rnaSeq[] = $rnaSeq;

        return $this;
    }

    /**
     * Remove rnaSeq
     *
     * @param \AppBundle\Entity\rnaseq $rnaSeq
     */
    public function removeRnaSeq(\AppBundle\Entity\rnaseq $rnaSeq)
    {
        $this->rnaSeq->removeElement($rnaSeq);
    }

    /**
     * Get rnaSeq
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRnaSeq()
    {
        return $this->rnaSeq;
    }
}
