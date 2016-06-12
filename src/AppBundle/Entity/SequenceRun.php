<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SequenceRun
 *
 * @ORM\Table(name="sequence_run")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SequenceRunRepository")
 */
class SequenceRun
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Experiment", mappedBy="sequenceRun", cascade={"all"})
     */
    protected $experiments;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return SequenceRun
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add experiment
     *
     * @param \AppBundle\Entity\Experiment $experiment
     *
     * @return SequenceRun
     */
    public function add(\AppBundle\Entity\Experiment $experiment)
    {
        $this->experiments[] = $experiment;

        $experiment->setSequenceRun($this);
    }

    /**
     * Remove experiment
     *
     * @param \AppBundle\Entity\Experiment $experiment
     */
    public function removeRnaSeq(\AppBundle\Entity\Experiment $experiment)
    {
        $this->experiments->removeElement($experiment);
    }

    /**
     * Get experiments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExperiments()
    {
        return $this->experiments;
    }
}

