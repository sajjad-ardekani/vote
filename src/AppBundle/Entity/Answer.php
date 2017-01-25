<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answer Class
 *
 * @ORM\Entity(repositoryClass="AnswersRepository")
 * @ORM\Table(name="answers")
 */
class Answer {

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Vote", inversedBy="answers")
     * @ORM\JoinColumn(name="vote_id", referencedColumnName="id")
     */
    private $vote;

    /**
     * @ORM\ManyToOne(targetEntity="AnswerQuestion")
     * @ORM\JoinColumn(name="answer_question_id", referencedColumnName="id")
     */
    private $answer;

    public function __toString() {
        return (string) $this->id;
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
     * Set vote
     *
     * @param \AppBundle\Entity\Vote $vote
     *
     * @return Answer
     */
    public function setVote(\AppBundle\Entity\Vote $vote = null)
    {
        $this->vote = $vote;

        return $this;
    }

    /**
     * Get vote
     *
     * @return \AppBundle\Entity\Vote
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * Set answer
     *
     * @param \AppBundle\Entity\AnswerQuestion $answer
     *
     * @return Answer
     */
    public function setAnswer(\AppBundle\Entity\AnswerQuestion $answer = null)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return \AppBundle\Entity\AnswerQuestion
     */
    public function getAnswer()
    {
        return $this->answer;
    }
}
