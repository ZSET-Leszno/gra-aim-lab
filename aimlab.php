<?php
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css_strona.css">
    <title>AIM Lab</title>
</head>
<body>
    <?php
        $connect = mysqli_connect($host, $db_user, $db_password, $db_name);
        if (isset($_POST["username"])) {
            $nick=$_POST["username"];
            echo "<div class='text'><p id='text2'>NICK - ".$nick."</p><p id='text1'>- TIME</p></div>";
        } 
    ?>
    <?php
        /*mysqli_query($connect, "INSERT INTO wyniki (id, nick, czas) VALUES (NULL, '$nick', '0.2')");*/
        mysqli_close($connect);
    ?>
</body>
</html>