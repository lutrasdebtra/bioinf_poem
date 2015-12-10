<?php 
// src/AppBundle/Entity/RNASeq.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="rnaseq")
 */
class RNASeq {

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
     * @ORM\Column(type="boolean")
     */
    protected $ribodepleted;

    /**
     * @ORM\Column(type="string")
     */
    protected $finalQuality;

    /**
     * @ORM\Column(type="integer")
     */
    protected $sampleNum;

    /**
     * Library Preparation.
     */

    /**
     * @ORM\Column(type="string")
     */
    protected $protocolUsed;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $step1;

    /**
     * @ORM\Column(type="string")
     */
    protected $step1Result;


    /**
     * Sequencing.
     */

    /**
     * @ORM\Column(type="string")
     */
    protected $serviceProvider;

    /**
     * @ORM\Column(type="string")
     */
    protected $platform;

    /**
     * TODO: RUN PARAMETERS
     */

    /**
     * @ORM\Column(type="string")
     */
    protected $dataFiles;

    /**
     * Bioinformatic Analysis.
     */

    /**
     * @ORM\Column(type="string")
     */
    protected $pipeline;

    /**
     * @ORM\Column(type="string")
     */
    protected $pipelineParameters;

    /**
     * @ORM\Column(type="string")
     */
    protected $resultFiles;

    /**
     * @ORM\ManyToOne(targetEntity="Experiment", inversedBy="rnaSeqs")
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
     * @return RNASeq
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
     * Set ribodepleted
     *
     * @param boolean $ribodepleted
     *
     * @return RNASeq
     */
    public function setRibodepleted($ribodepleted)
    {
        $this->ribodepleted = $ribodepleted;

        return $this;
    }

    /**
     * Get ribodepleted
     *
     * @return boolean
     */
    public function getRibodepleted()
    {
        return $this->ribodepleted;
    }

    /**
     * Set finalQuality
     *
     * @param string $finalQuality
     *
     * @return RNASeq
     */
    public function setFinalQuality($finalQuality)
    {
        $this->finalQuality = $finalQuality;

        return $this;
    }

    /**
     * Get finalQuality
     *
     * @return string
     */
    public function getFinalQuality()
    {
        return $this->finalQuality;
    }

    /**
     * Set sampleNum
     *
     * @param integer $sampleNum
     *
     * @return RNASeq
     */
    public function setSampleNum($sampleNum)
    {
        $this->sampleNum = $sampleNum;

        return $this;
    }

    /**
     * Get sampleNum
     *
     * @return integer
     */
    public function getSampleNum()
    {
        return $this->sampleNum;
    }

    /**
     * Set protocolUsed
     *
     * @param string $protocolUsed
     *
     * @return RNASeq
     */
    public function setProtocolUsed($protocolUsed)
    {
        $this->protocolUsed = $protocolUsed;

        return $this;
    }

    /**
     * Get protocolUsed
     *
     * @return string
     */
    public function getProtocolUsed()
    {
        return $this->protocolUsed;
    }

    /**
     * Set step1
     *
     * @param boolean $step1
     *
     * @return RNASeq
     */
    public function setStep1($step1)
    {
        $this->step1 = $step1;

        return $this;
    }

    /**
     * Get step1
     *
     * @return boolean
     */
    public function getStep1()
    {
        return $this->step1;
    }

    /**
     * Set step1Result
     *
     * @param string $step1Result
     *
     * @return RNASeq
     */
    public function setStep1Result($step1Result)
    {
        $this->step1Result = $step1Result;

        return $this;
    }

    /**
     * Get step1Result
     *
     * @return string
     */
    public function getStep1Result()
    {
        return $this->step1Result;
    }

    /**
     * Set serviceProvider
     *
     * @param string $serviceProvider
     *
     * @return RNASeq
     */
    public function setServiceProvider($serviceProvider)
    {
        $this->serviceProvider = $serviceProvider;

        return $this;
    }

    /**
     * Get serviceProvider
     *
     * @return string
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * Set platform
     *
     * @param string $platform
     *
     * @return RNASeq
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Get platform
     *
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Set dataFiles
     *
     * @param string $dataFiles
     *
     * @return RNASeq
     */
    public function setDataFiles($dataFiles)
    {
        $this->dataFiles = $dataFiles;

        return $this;
    }

    /**
     * Get dataFiles
     *
     * @return string
     */
    public function getDataFiles()
    {
        return $this->dataFiles;
    }

    /**
     * Set pipeline
     *
     * @param string $pipeline
     *
     * @return RNASeq
     */
    public function setPipeline($pipeline)
    {
        $this->pipeline = $pipeline;

        return $this;
    }

    /**
     * Get pipeline
     *
     * @return string
     */
    public function getPipeline()
    {
        return $this->pipeline;
    }

    /**
     * Set pipelineParameters
     *
     * @param string $pipelineParameters
     *
     * @return RNASeq
     */
    public function setPipelineParameters($pipelineParameters)
    {
        $this->pipelineParameters = $pipelineParameters;

        return $this;
    }

    /**
     * Get pipelineParameters
     *
     * @return string
     */
    public function getPipelineParameters()
    {
        return $this->pipelineParameters;
    }

    /**
     * Set resultFiles
     *
     * @param string $resultFiles
     *
     * @return RNASeq
     */
    public function setResultFiles($resultFiles)
    {
        $this->resultFiles = $resultFiles;

        return $this;
    }

    /**
     * Get resultFiles
     *
     * @return string
     */
    public function getResultFiles()
    {
        return $this->resultFiles;
    }

    /**
     * Set experiment
     *
     * @param \AppBundle\Entity\Experiment $experiment
     *
     * @return RNASeq
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
