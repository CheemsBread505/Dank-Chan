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

    <!--POST-->
    <form action="post.php" method="POST">
        <label for="uname">User name:</label><br>
        <input type="text" id="uname" name="uname" value="Anonymous"><br>
        <br>
        <input type="text" id="subject" name="subject" placeholder="subject"><br>
        <textarea id="textBox" name="textBox" rows="4" placeholder="comment"></textarea>
        <input type="submit" value="Submit">
    </form> 

    <?php
        echo('<script>console.log("Hello from /b/!");</script>')
    ?>
</body>
</html>