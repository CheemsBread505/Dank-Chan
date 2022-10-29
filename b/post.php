<?php
$random = (rand());
if(isset($_POST['uname']) && isset($_POST['textBox']) && isset($_POST['subject'])) {

    $username = $_POST['uname'];
    $textbox = $_POST['textBox'];
    $subjectHeader = $_POST['subject'];
    
    $usernameClean = strip_tags($username);
    $textboxClean = strip_tags($textbox);
    $subjectHeadeClean = strip_tags($subjectHeader);

    $data = '<div class="postbox'.$random.'">'. '<h3>'.$subjectHeadeClean.'</h3>'. '<p>'.$usernameClean.': '.$random.'</p>'. '<hr>'. '<p>'.$textboxClean.'</p>'. '</div>'. "\r\n";
    $ret = file_put_contents('chat.txt', $data, FILE_APPEND | LOCK_EX);
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

<html>
    <script type="text/javascript">location.href = '/b/';</script>
</html>