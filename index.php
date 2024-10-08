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
        <link rel="stylesheet" href="css/index.css">
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
                <i> <a href="./">Главная</a> </i>
            </div>

            <div class="link_all">
                <div class="link_services">
                    <i> <a href="./passwordgen.php">PasswordGenerator</a> </i>
                    <p>Простой генератор паролей</p>
                    <hr>
                    <i> <a href="./factor.php">Factor</a> </i>
                    <p>Разложение числа на множители</p>
                    <hr>
                    <i> <a href="./random.php">Random</a> </i>
                    <p>Генератор чисел и имен</p>
                    <hr>
                    <i> <a href="./color.php">Color</a> </i>
                    <p>RGB-палитра</p>
                    <hr>
                    <i> <a href="./anecdotes.php">Anecdotes</a></i>
                    <p>Сборник анекдотов</p>
                </div>

                <div class="link_games">
                    <i> <a href="./tictactoe.php">TicTacToe</a></i>
                    <p>Игра "Крестики-нолики"</p>
                    <hr>
                    <i> <a href="./tag.php">Tag</a> </i>
                    <p>Игра "Пятнашки"</p>
                    <hr>
                    <i> <a href="./schulte.php">Schulte</a> </i>
                    <p>Таблицы Шульте</p>
                    <hr>
                </div>
            </div>

            <?php
                if ($CONF["enable_amsfiles"] == true)
                {
                    print("<div class='amsfiles_link'>");
                    print("<img src='img/AMSFiles.png'  width='50px' height='50px'>");
                    print("<a href='./amsfiles/' target='_blank'>AMSFiles</a>");
                    print("</div>");
                }

                if ($CONF["enable_amsnotes"] == true)
                {
                    print("<div class='amsnotes_link'>");
                    print("<img src='img/AMSNotes.png' width='50px' height='50px'>");
                    print("<a href='./amsnotes/' target='_blank'>AMSNotes</a>");
                    print("</div>");
                }

                if ($CONF["enable_amsclock"] == true)
                {
                    print("<div class='amsclock_link'>");
                    print("<img src='img/AMSClock.png' width='50px' height='50px'>");
                    print("<a href='./amsclock/' target='_blank'>AMSClock</a>");
                    print("</div>");
                }
            ?>

            <footer>
                <p> <i> <?php print($CONF["copyright"]); ?> </i> </p>
            </footer>
        </div>
    </body>
</html>
