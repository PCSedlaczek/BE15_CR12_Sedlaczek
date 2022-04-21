<?php

function upload($img) {
  // Object for file upload status
  $result = new stdClass();
  $result->fileName = "pexels-denis-linine-753772.jpg";
  $result->error = true;

  // Object for image data
  $fileName = $img["name"];
  $fileType = $img["type"];
  $fileTmpName = $img["tmp_name"];
  $fileError = $img["error"];
  $fileSize = $img["size"];
  $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
  $filesAllowed = ["png", "jpg", "jpeg"];

  // No file selected [UPLOAD_ERR_NO_FILE]
  if ($fileError == 4) {
    $result->ErrorMessage = "No image was selected<br>It can always be updated later";
    return $result;
  } // <<< [UPLOAD_ERR_NO_FILE]

  // File selected [UPLOAD_ERR_NO_FILE]
  else { 

    // File extension valid [in_array}
    if (in_array($fileExtension, $filesAllowed)) {

      // No file upload errors [UPLOAD_ERR_OK}
      if ($fileError === 0) {

        // File size within limit [file_size]
        if ($fileSize < 500000) { // 500KB (in Bytes)
          $fileNewName = uniqid('').'.'.$fileExtension;
          $src = "../img/$fileNewName";

          // File upload successful [move_uploaded_file]
          if (move_uploaded_file($fileTmpName, $src)) 
          {
            $result->error = 0;
            $result->fileName = $fileNewName;
            return $result;
          } // <<< [move_uploaded_file]

          // File upload failed [move_uploaded_file XX]
          else { 
            $result->ErrorMessage = "There was an error uploading this file to the destination directory";
            return $result;
          } // <<< [move_uploaded_file XX]

        } // <<< [file_size]
        
        // File size over limit [file_size XX]
        else {
          $result->ErrorMessage = "This image exceeds the file size limit of 500KB<br>Please choose a smaller one and update the record";
          return $result;
        } // <<< [file_size XX]

      } // <<< [UPLOAD_ERR_OK]

      // Other file upload error [UPLOAD_ERR_OK XX]
      else { 
        $result->ErrorMessage = "There was an error uploading this file<br>Error code: $fileError<br> code. Please check the PHP documentation for details";
        return $result;
      } // <<< [UPLOAD_ERR_OK XX]

    } // <<< [in_array]

    // File extension invalid [in_array XX]
    else { 
      $result->ErrorMessage = "This file type cannot be uploaded<br>Supported file types are ".implode(', ', $filesAllowed);
      return $result;
    } // <<< [in_array XX]

  } // <<< [UPLOAD_ERR_NO_FILE XX]

}