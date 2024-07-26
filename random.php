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
        <link rel="stylesheet" href="css/random.css">
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
                <i> <a href="./">Главная &#8594 Сервисы</a> <a href="./random.php">&#8594 Генератор случайных значений</a> </i>
            </div>
            
            <div class="randomForm">
                <div class="randomNumbers">
                    <p>От:</p>
                    <input type="number" class="inputCls" id="numberMin" value="0" min="0">
                    <p>До:</p>
                    <input type="number" class="inputCls" id="numberMax" value="9" min="0">
                    <input type="button" class="inputCls" value="Сгенерировать" onclick="GetRandomNumber()">
                    <input type="number" class="inputCls" id="numberBox" readonly>
                </div>

                <div class="randomNames">
                    <p>Количество:</p>
                    <input type="number" class="inputCls" id="numberNames" min="0" value="10">

                    <input type="checkbox" id="chManNames" checked>
                    <label for="chManNames">Мужские имена</label> <br>
                    <input type="checkbox" id="chWomanNames" checked>
                    <label for="chWomanNames">Женские имена</label> <br>

                    <input type="button" class="inputCls" value="Сгенерировать" onclick="GetRandomNames()">
                    <textarea class="inputCls" id="namesBox" rows="25" readonly></textarea>
                </div>
            </div>

            <footer>
                <p> <i> <?php print($CONF["copyright"]); ?> </i> </p>
            </footer>
        </div>

        <script src="js/random.js"></script>
    </body>
</html>
