<?php

class FileUploader {
  private $target_dir;
  private $target_file;
  private $uploadOk;
  private $imageFileType;

  public function __construct($targetDir) {
    $this->target_dir = $targetDir;
  }

  public function uploadFile($fileToUpload) {
    // add random characters to the filename, to store without conflicts
    $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);
    $fileNameWithRandom = $randomString . basename($fileToUpload["name"]);
    $this->target_file = $this->target_dir . $fileNameWithRandom;
  
    $this->uploadOk = 1;
    $this->imageFileType = strtolower(pathinfo($this->target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($fileToUpload["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $this->uploadOk = 1;
      } else {
        echo "File is not an image.";
        $this->uploadOk = 0;
      }
    }

    // Check if file already exists
    if (file_exists($this->target_file)) {
      echo "Sorry, file already exists.";
      $this->uploadOk = 0;
    }

    // Check file size
    if ($fileToUpload["size"] > 2000000) {
      echo "Sorry, your file is too large.";
      $this->uploadOk = 0;
    }

    // Allow certain file formats
    if($this->imageFileType != "jpg" && $this->imageFileType != "png" && $this->imageFileType != "jpeg") {
      echo "Sorry, only JPG, JPEG & PNG files are allowed.";
      $this->uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($this->uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    } else {
      if (move_uploaded_file($fileToUpload["tmp_name"], $this->target_file)) {
        echo "The file ". htmlspecialchars(basename($fileToUpload["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
  }
}
