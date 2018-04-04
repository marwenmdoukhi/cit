<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity
 */
class Question
{
    /**
     * @var string
     *
     * @ORM\Column(name="parentidquestion", type="string", length=255,nullable=true)
     */
    private $parentIdQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255,nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=255,nullable=true)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255 ,nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


  

    /**
     * Set parentIdQuestion
     *
     * @param string $parentIdQuestion
     *
     * @return Question
     */
    public function setParentIdQuestion($parentIdQuestion)
    {
        $this->parentIdQuestion = $parentIdQuestion;

        return $this;
    }

    /**
     * Get parentIdQuestion
     *
     * @return string
     */
    public function getParentIdQuestion()
    {
        return $this->parentIdQuestion;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Question
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set question
     *
     * @param string $question
     *
     * @return Question
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Question
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
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
}
