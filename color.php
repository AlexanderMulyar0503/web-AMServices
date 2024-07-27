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
        <link rel="stylesheet" href="css/color.css">
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
                <i> <a href="./">Главная &#8594 Сервисы</a> <a href="./color.php">&#8594 RGB-палитра</a> </i>
            </div>

            <div class="rgbForm">
                <div class="rgbPalette">
                    <p>Красный:</p>
                    <input type="range" class="colorRng" id="colorRngRed" min="0" max="255" value="0" oninput="SetNumber()">
                    <input type="number" class="colorNum" id="colorNumRed" min="0" max="255" value="0" oninput="SetRange()">
                    <p>Зеленый:</p>
                    <input type="range" class="colorRng" id="colorRngGreen" min="0" max="255" value="0" oninput="SetNumber()">
                    <input type="number" class="colorNum" id="colorNumGreen" min="0" max="255" value="0" oninput="SetRange()">
                    <p>Синий:</p>
                    <input type="range" class="colorRng" id="colorRngBlue" min="0" max="255" value="0" oninput="SetNumber()">
                    <input type="number" class="colorNum" id="colorNumBlue" min="0" max="255" value="0" oninput="SetRange()">
                </div>

                <textarea class="colorPreview" id="colorPreview"></textarea>

                <div class="htmlColor">
                    <input type="text" id="htmlColorVle" value="#000000">
                </div>
            </div>

            <footer>
                <p> <i> <?php print($CONF["copyright"]); ?> </i> </p>
            </footer>
        </div>

        <script src="js/color.js"></script>
    </body>
</html>
