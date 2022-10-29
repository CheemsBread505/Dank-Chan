<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/src/img/dankChan.png">
    <link rel="stylesheet" href="styles.css">
    <title>Dank Chan /b/</title>
</head>
<body>
    <h2 class="welcome">Welcome to /b/!</h2>

    <!--Users input to be posted-->
    <form action="post.php" method="POST" enctype="multipart/form-data">
        <label for="uname">User name:</label><br>
        <input type="text" id="uname" name="uname" maxlength="10" value="Anonymous"><br>
        <br>
        <input type="text" id="subject" name="subject" maxlength="29" placeholder="subject"><br>
        <textarea id="textBox" name="textBox" rows="4" placeholder="comment" maxlength="1200"></textarea><br>
        <input type="file" name="fileToUpload" id="fileToUpload"><br>
        <br>
        <input type="submit" value="Submit">
    </form> 

    <br>
    <hr>

    <!--Loads the user's posts from the file-->
    <?php
        $fh = fopen('chat.txt','r');
        while ($line = fgets($fh)) {
        echo($line);
        }
        fclose($fh);
    ?>
</body>
</html>