<?php

class FileUploader {
    private $target_dir;
    private $target_file;
    public $uploadOk;
    public $errorMessage;

    public function __construct($targetDir) {
        $this->target_dir = $targetDir;
    }

    public function uploadFile($fileToUpload, $fileName, $allowedFileTypes) {
        $this->target_file = $this->target_dir . $fileName;
        $this->uploadOk = 1;

        $fileType = strtolower(pathinfo($this->target_file, PATHINFO_EXTENSION));

        // Check file type
        if (!in_array($fileType, $allowedFileTypes)) {
            $this->errorMessage = "Sorry, only " . implode(', ', $allowedFileTypes) . " files are allowed.";
            $this->uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($this->uploadOk == 0) {
            $this->errorMessage = $this->errorMessage . " Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($fileToUpload["tmp_name"], $this->target_file)) {
                // File uploaded successfully
            } else {
                $this->errorMessage = "Sorry, there was an error uploading your file.";
            }
        }


    }
}


