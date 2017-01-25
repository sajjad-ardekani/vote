<?php

namespace AppBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sketch level
 *

 * @ORM\Entity
 */
class PersonImage extends \AppBundle\Entity\Image
{

    /**
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="images")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $person;

    public function getPathname()
    {
        return $this->getBasePath() . $this->person->getId();
    }

    public function getThumbPathname()
    {
        return "upload/person/" . $this->person->getId() . "/";
    }

    public function getThumbImageId()
    {

        return $this->person->getId();
    }

    public function getUploadAddress()
    {
        return __DIR__ . '/../../../../web/upload/person/';
    }



    /**
     * Set person
     *
     * @param \AppBundle\Entity\User\Person $person
     *
     * @return PersonImage
     */
    public function setPerson(\AppBundle\Entity\User\Person $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \AppBundle\Entity\User\Person
     */
    public function getPerson()
    {
        return $this->person;
    }
}
