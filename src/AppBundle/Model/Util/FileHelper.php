<?php

namespace AppBundle\Model\Util;

/**
 * Description of FileHelper
 *
 * @author Sajjad Ardekani
 */
class FileHelper
{

    public function getFileExt(\Symfony\Component\HttpFoundation\File\File $file)
    {
        $ext = $file->guessExtension();
        if (!$ext) {
            $ext = "bin";
        }
        return $ext;
    }

    public function getFileMimetype($filename)
    {
        $fnArr = explode(".", $filename);
        $ext = array_pop($fnArr);
        switch ($ext) {
            case "jpg":
            case "jpeg":
                return "jpeg";
            case "tif":
            case "tiff":
                return "tif";
            case "zip":
                return "application/zip";
            case "pdf":
                return "application/pdf";
            case "txt":
            case "html":
                return "text/plain";
            default :
                return "";
        }
    }

    public function getFileName($filename)
    {
        $fnArr = explode(".", $filename, -1);

        return $fnArr;
    }


}
