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
        <link rel="stylesheet" href="css/passwordgen.css">
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
                <i> <a href="./">Главная &#8594 Сервисы</a> <a href="./passwordgen.php">&#8594 Генератор паролей</a> </i>
            </div>

            <div class="passwordForm">
                <div class="numChar">
                    <input type="number" class="numCharVle" id="numCharVle" min="1" max="50" value="8">
                    <br>
                    <input type="button" class="btn" id="numMinus" value="-" onclick="SetNumChar(-1)">
                    <input type="button" class="btn" id="numPlus" value="+" onclick="SetNumChar(1)">
                    <br>
                    <input type="button" class="btn" id="numSet4" value="4" onclick="SetNumChar(4)">
                    <input type="button" class="btn" id="numSet8" value="8" onclick="SetNumChar(8)">
                    <input type="button" class="btn" id="numSet12" value="12" onclick="SetNumChar(12)">
                </div>

                <div class="typeChar">
                    <input type="checkbox" id="charUp" checked>
                    <label for="charUp">Буквы (верхний регистр)</label> <br>
                    <input type="checkbox" id="charLow" checked>
                    <label for="charLow">Буквы (нижний регистр)</label> <br>
                    <input type="checkbox" id="digit" checked>
                    <label for="digit">Цифры</label> <br>
                    <input type="checkbox" id="spChar" checked>
                    <label for="spChar">Спец. символы</label> <br>
                </div>

                <div class="passwd">
                    <input type="text" id="passwd" value="Здесь будет Ваш пароль..." readonly>
                    <input type="button" id="passwdBtn" value="Сгенерировать" onclick="GetPassword()">
                </div>
            </div>

            <footer>
                <p> <i> <?php print($CONF["copyright"]); ?> </i> </p>
            </footer>
        </div>

        <script src="js/passwordgen.js"></script>
    </body>
</html>
