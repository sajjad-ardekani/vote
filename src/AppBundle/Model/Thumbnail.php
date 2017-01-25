<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Model;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Imagick;

/**
 * Description of Thumbnail
 *
 * @author Sajjad
 */
class Thumbnail
{

    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function generateThumbs($tmpFile, $entity, $imageThumbName)
    {
        $width = 350;
        $height = 350;
//        $quality = $this->container->getParameter('thumb.quality');
        if (class_exists("Imagick")) {
            $image = new Imagick($tmpFile);
            $image->setImageFormat('jpeg');
            $image->writeimage($entity->getThumbPathname() . $entity->getName() . ".jpeg");
            $image->setImageCompressionQuality($quality);
            $image->resizeImage($width, $height, \Imagick::FILTER_POINT, 0.9, true);
            $image->writeimage($entity->getThumbPathname() . $imageThumbName . ".jpeg");
        } else {

            $this->resizeImage($tmpFile, $width, $height, $entity->getThumbPathname() . $imageThumbName);
        }
        if (isset($tmpFile) && is_file($tmpFile)) {
            return new \Symfony\Component\HttpFoundation\Response('success');
        }
    }

    /**
     * Resize an image and keep the proportions
     * @author Allison Beckwith <allison@planetargon.com>
     * @param string $filename
     * @param integer $max_width
     * @param integer $max_height
     * @return image
     */
    protected function resizeImage($filename, $max_width, $max_height, $thumb_name)
    {

        list($orig_width, $orig_height) = getimagesize($filename);

        $width = $orig_width;
        $height = $orig_height;

        # taller
        if ($height > $max_height) {
            $width = ($max_height / $height) * $width;
            $height = $max_height;
        }

        # wider
        if ($width > $max_width) {
            $height = ($max_width / $width) * $height;
            $width = $max_width;
        }

        $image_p = imagecreatetruecolor($width, $height);

        $image = imagecreatefromjpeg($filename);

        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $orig_width, $orig_height);

        imagejpeg($image_p, $thumb_name . ".jpeg");
    }

    public function getImageName($entity, $fileName)
    {

//        $fnArr = explode(".", $fileName, -1);
//        foreach ($fnArr as $value) {
        $name = $entity->getId() . "-" . $fileName;
//        }
        return $name;
    }

    public function getThumbImageName($entity, $fileName)
    {

//        $fnArr = explode(".", $fileName, -1);
//        foreach ($fnArr as $value) {
        $name = "thumb-" . $entity->getThumbImageId() . "-" . $fileName;
//        }
        return $name;
    }

    public function saveThumb($avatarTmpFile, $entity, $fileName)
    {

        if (is_file($avatarTmpFile)) {
            $thumbImageName = $this->getThumbImageName($entity, $fileName);
            $this->generateThumbs($avatarTmpFile, $entity, $thumbImageName);
        }
    }

}
