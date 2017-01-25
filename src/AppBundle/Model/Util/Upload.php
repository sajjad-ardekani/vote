<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Model\Util;

use AppBundle\File;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Description of Upload
 *
 * @author Sajjad
 */
class Upload
{

    public function getUploadedFiles($request, $key)
    {
        if ($request->getSession()->has("file_upload_$key")) {
            return $request->getSession()->get("file_upload_$key");
        } else {
            return [];
        }
    }

    public function addUploadedFile($request, $key, File $file)
    {
        $files = $this->getUploadedFiles($request, $key);
        $files[$file->uuid] = $file;
        return $request->getSession()->set("file_upload_$key", $files);
    }

    public function clearUploadedFiles($request, $key)
    {
        $files = $this->getUploadedFiles($request, $key);
        foreach ($files as $f) {
            if (is_file($f->pathname)) {
                unlink($f->pathname);
            }
            if (is_dir(dirname($f->pathname))) {
                rmdir(dirname($f->pathname));
            }
        }
        $request->getSession()->remove("file_upload_$key");
    }

}
