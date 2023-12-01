<?php

class FileUploader {
  private $target_dir;
  private $target_file;
  private $uploadOk;
  private $imageFileType;
  public $errorMessage;

  public function __construct($targetDir) {
    $this->target_dir = $targetDir;
  }

  public function uploadFile($fileToUpload,$fileName) {
    // add random characters to the filename, to store without conflicts
   
    $this->target_file = $this->target_dir . $fileName;
  
    $this->uploadOk = 1;
    $this->imageFileType = strtolower(pathinfo($this->target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"]) && !empty($fileToUpload["tmp_name"])) {
      $check = getimagesize($fileToUpload["tmp_name"]);
      if($check !== false) {
        $this->uploadOk = 1;
      } else {
        $this->errorMessage = "File is not an image.";
        $this->uploadOk = 0;
      }
    }

    // Check if file already exists
    if (file_exists($this->target_file)) {
      $this->errorMessage = "Sorry, file already exists.";
      $this->uploadOk = 0;
    }

  
    // Check file size
    if ($fileToUpload["size"] > 2000000) {
      $this->errorMessage = "Sorry, your file is too large.";
      $this->uploadOk = 0;
    }

    // Allow certain file formats
    if($this->imageFileType != "jpg" && $this->imageFileType != "png" && $this->imageFileType != "jpeg") {
      $this->errorMessage = "Sorry, only JPG, JPEG & PNG files are allowed.";
      $this->uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($this->uploadOk == 0) {
      $this->errorMessage = $this->errorMessage . "Sorry, your file was not uploaded.";
    } else {
      if (move_uploaded_file($fileToUpload["tmp_name"], $this->target_file)) {
        //
      } else {
        $this->errorMessage = "Sorry, there was an error uploading your file.";
      }
    }
  }
}
