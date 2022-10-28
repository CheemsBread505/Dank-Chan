<?php
$random = (rand());

if(isset($_POST['uname']) && isset($_POST['textBox']) && isset($_POST['subject'])) {
    $subjectHeader = $_POST['subject'];
    $data = '<div class="postbox'.$random.'">'. '<h3>'.$subjectHeader.'</h3>'. '<p>'.$_POST['uname'].'</p>'. '<p>'.$_POST['textBox'].'</p>'. '</div>'. "\r\n";
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