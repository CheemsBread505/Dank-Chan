<?php
if(isset($_POST['uname']) && isset($_POST['textBox'])) {
    $data = '<div class="postbox">'. $_POST['uname']. $_POST['textBox']. '</div>'. "\r\n";
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