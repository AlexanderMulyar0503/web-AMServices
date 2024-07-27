<?php
    include "conf.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title> <?php print($CONF["company"]); ?> </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/favicon.png">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/factor.css">
    </head>

    <body>
        <div class="container">
            <header>
                <div class="header_logo">
                    <a href="./"> <img src="img/favicon.png" width="75px" height="75px"> </a>
                </div>
                <div class="header_link">
                    <a href="./"> <b> <i><?php print($CONF["company"]); ?></i> </b> </a>
                </div>
            </header>

            <div class="siteMap">
                <i> <a href="./">Главная &#8594 Сервисы</a> <a href="./factor.php">&#8594 Разложение чисел</a> </i>
            </div>

            <div class="factorForm">
                <input type="number" id="factorVle" min="2" value="2">
                <input type="button" value="Разложить" onclick="factorBtn_Click()">
                <textarea id="factorResult" rows="20"></textarea>
            </div>

            <footer>
                <p> <i> <?php print($CONF["copyright"]); ?> </i> </p>
            </footer>
        </div>

        <script src="js/factor.js"></script>
    </body>
</html>
