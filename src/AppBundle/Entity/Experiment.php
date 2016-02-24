<?php 
// src/AppBundle/Entity/Experiment.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
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
     * @Assert\NotBlank()
     */
    protected $title;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $expType;

    /**
     * @ORM\Column(type="array")
     */
    protected $sampleNums;

    /**
     * @ORM\OneToMany(targetEntity="RNASeq", mappedBy="experiment", cascade={"all"})
     */
    protected $rnaSeqs;

    /**
     * @ORM\OneToMany(targetEntity="DNASeq", mappedBy="experiment", cascade={"all"})
     */
    protected $dnaSeqs;

    /**
     * @ORM\OneToMany(targetEntity="Metabolomic", mappedBy="experiment", cascade={"all"})
     */
    protected $metabolomics;

    /**
     * @ORM\OneToMany(targetEntity="Proteomic", mappedBy="experiment", cascade={"all"})
     */
    protected $proteomics;

    public function __construct()
    {
        $this->rnaSeqs = new ArrayCollection();
    }

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

    public function addSampleNum($sampleNum)
    {
        $this->sampleNums[] = $sampleNum;
    }

    /**
     * Remove rnaSeq
     *
     * @param \AppBundle\Entity\RNASeq $rnaSeq
     */
    public function removeSampleNum($sampleNum)
    {
        $this->sampleNums->removeElement($sampleNum);
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
     * @param \AppBundle\Entity\RNASeq $rnaSeq
     *
     * @return Experiment
     */
    public function addRnaSeq(\AppBundle\Entity\RNASeq $rnaSeq)
    {
        $this->rnaSeqs[] = $rnaSeq;

        $rnaSeq->setExperiment($this);
    }

    /**
     * Remove rnaSeq
     *
     * @param \AppBundle\Entity\RNASeq $rnaSeq
     */
    public function removeRnaSeq(\AppBundle\Entity\RNASeq $rnaSeq)
    {
        $this->rnaSeqs->removeElement($rnaSeq);
    }

    /**
     * Get rnaSeqs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRnaSeqs()
    {
        return $this->rnaSeqs;
    }

    /**
     * Add dnaSeq
     *
     * @param \AppBundle\Entity\DNASeq $dnaSeq
     *
     * @return Experiment
     */
    public function addDnaSeq(\AppBundle\Entity\DNASeq $dnaSeq)
    {
        $this->dnaSeqs[] = $dnaSeq;

        $dnaSeq->setExperiment($this);
    }

    /**
     * Remove dnaSeq
     *
     * @param \AppBundle\Entity\DNASeq $dnaSeq
     */
    public function removeDnaSeq(\AppBundle\Entity\DNASeq $dnaSeq)
    {
        $this->dnaSeqs->removeElement($dnaSeq);
    }

    /**
     * Get dnaSeqs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDnaSeqs()
    {
        return $this->dnaSeqs;
    }

    /**
     * Add metabolomic
     *
     * @param \AppBundle\Entity\Metabolomic $metabolomic
     *
     * @return Experiment
     */
    public function addMetabolomic(\AppBundle\Entity\Metabolomic $metabolomic)
    {
        $this->metabolomic[] = $metabolomic;

        $metabolomic->setExperiment($this);
    }

    /**
     * Remove metabolomic
     *
     * @param \AppBundle\Entity\Metabolomic $metabolomic
     */
    public function removeMetabolomic(\AppBundle\Entity\Metabolomic $metabolomic)
    {
        $this->metabolomics->removeElement($metabolomic);
    }

    /**
     * Get metabolomics
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMetabolomics()
    {
        return $this->metabolomics;
    }

    /**
     * Add proteomic
     *
     * @param \AppBundle\Entity\Proteomic $proteomic
     *
     * @return Experiment
     */
    public function addProteomic(\AppBundle\Entity\Proteomic $proteomic)
    {
        $this->proteomic[] = $proteomic;

        $proteomic->setExperiment($this);
    }

    /**
     * Remove proteomic
     *
     * @param \AppBundle\Entity\Proteomic $proteomic
     */
    public function removeProteomic(\AppBundle\Entity\Proteomic $proteomic)
    {
        $this->proteomics->removeElement($proteomic);
    }

    /**
     * Get proteomics
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProteomics()
    {
        return $this->proteomics;
    }


    /**
     * Set expType
     *
     * @param string $expType
     *
     * @return Experiment
     */
    public function setExpType($expType)
    {
        $this->expType = $expType;

        return $this;
    }

    /**
     * Get expType
     *
     * @return string
     */
    public function getExpType()
    {
        return $this->expType;
    }
}
