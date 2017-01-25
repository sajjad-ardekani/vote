<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({                  
 *                  "person" = "AppBundle\Entity\User\PersonImage",
 * 
 * })
 */
abstract class Image {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    private $id;

    /**
     * @var datetime
     *
     * @ORM\Column(name="create_at", type="datetime")
     */
    private $createAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="integer")
     */
    private $size = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="width", type="integer")
     */
    private $width = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="height", type="integer")
     */
    private $height = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="mimeType", type="string", length=255, nullable=true)
     */
    private $mimeType;

    /**
     * @var string
     *
     * @ORM\Column(name="ext", type="string", length=255)
     */
    private $ext;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name = "";

    public function getBasePath() {
        return realpath(__DIR__ . '/../../../files') . "/";
    }

    abstract public function getPathname();

    /**
     * @ORM\PrePersist
     */
    public function initiateToPersist() {
        $this->setCreateAt(new \DateTime());
    }

    public function getSizeText() {
        if ($this->size < 1024 * 1024) {
            $s = $this->size / 1024;
            if ($s < 100) {
                $d = 2;
            } elseif ($s < 1000) {
                $d = 1;
            } else {
                $d = 0;
            }
            return number_format($s, $d) . " " . "کیلوبایت";
        } else {
            $s = $this->size / (1024 * 1024);
            if ($s < 100) {
                $d = 2;
            } elseif ($s < 1000) {
                $d = 1;
            } else {
                $d = 0;
            }
            return number_format($s, $d) . " " . "مگابایت";
        }
    }

    /**
     *   ####################                              ####################
     *   ####################   Auto Generated methods     ####################
     *   ####################                              ####################
     */

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     * @return Image
     */
    public function setCreateAt($createAt) {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime 
     */
    public function getCreateAt() {
        return $this->createAt;
    }

    /**
     * Set size
     *
     * @param integer $size
     * @return Image
     */
    public function setSize($size) {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * Set mimeType
     *
     * @param string $mimeType
     * @return Image
     */
    public function setMimeType($mimeType) {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get mimeType
     *
     * @return string 
     */
    public function getMimeType() {
        return $this->mimeType;
    }

    /**
     * Set ext
     *
     * @param string $ext
     * @return Image
     */
    public function setExt($ext) {
        $this->ext = $ext;

        return $this;
    }

    /**
     * Get ext
     *
     * @return string 
     */
    public function getExt() {
        return $this->ext;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Image
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set width
     *
     * @param integer $width
     * @return Image
     */
    public function setWidth($width) {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer 
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return Image
     */
    public function setHeight($height) {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight() {
        return $this->height;
    }

}
