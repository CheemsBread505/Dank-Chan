<?php
// Images
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "webp") {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


// Text
$random = (rand());
if(isset($_POST['uname']) && isset($_POST['textBox']) && isset($_POST['subject'])) {
    // tags
    $username = $_POST['uname'];
    $textbox = $_POST['textBox'];
    $subjectHeader = $_POST['subject'];
    $img = $target_file;
    // removes html from the tags
    $usernameClean = strip_tags($username);
    $textboxClean = strip_tags($textbox);
    $subjectHeadeClean = strip_tags($subjectHeader);
    
    // puts the user's input into a file to be loaded as a post
    $data = '<div class="postbox'.$random.'">'. '<h3>'.$subjectHeadeClean.'</h3>'. '<p>'.$usernameClean.': '.$random.'</p>'. '<hr>'. '<p>'.$textboxClean.'</p>'. '<img src="'.$img.'" class="imageInput">'. '</div>'. '<br>'. "\r\n";
    $ret = file_put_contents('chat.txt', $data, FILE_APPEND | LOCK_EX);
    $a = null;
    var_dump($a);

    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
?>

<!--Sends the user back to the main website-->
<html>
    <script type="text/javascript">location.href = '/b/';</script>
</html>
