#!/bin/bash

echo "Выберете приложение:"
echo "1) AMSFiles"
echo "2) AMSNotes"
echo "3) AMSClock"

read app
case "$app" in
    1)
        echo "Выберете опцию:"
        echo "1) Установка AMSFiles"
        echo "2) Обновление AMSFiles"

        read opt
        case "$opt" in
            1) 
                echo "Установка AMSFiles"
                git clone https://github.com/AlexanderMulyar0503/web-AMSFiles.git ./amsfiles
                cd amsfiles
                cp conf.sample.php conf.php
                echo "---"
                echo "Внесите необходимые изменения в файл ./amsfiles/conf.php"
            ;;

            2)
                echo "Обновление AMSFiles"
                cd amsfiles
                git pull origin master
            ;;

            *) echo "Неверное значение" ;;
        esac
    ;;

    2)
        echo "Выберете опцию:"
        echo "1) Установка AMSNotes"
        echo "2) Обновление AMSNotes"

        read opt
        case "$opt" in
            1) 
                echo "Установка AMSNotes"
                git clone https://github.com/AlexanderMulyar0503/web-AMSNotes.git ./amsnotes
                cd amsnotes
                cp conf.sample.php conf.php
                echo "---"
                echo "Внесите необходимые изменения в файл ./amsnotes/conf.php"
            ;;

            2)
                echo "Обновление AMSNotes"
                cd amsnotes
                git pull origin master
            ;;

            *) echo "Неверное значение" ;;
        esac
    ;;

    3)
        echo "Выберете опцию:"
        echo "1) Установка AMSClock"
        echo "2) Обновление AMSClock"

        read opt
        case "$opt" in
            1) 
                echo "Установка AMSClock"
                git clone https://github.com/AlexanderMulyar0503/web-AMSClock.git ./amsclock
                cd amsclock
                cp conf.sample.php conf.php
                echo "---"
                echo "Внесите необходимые изменения в файл ./amsclock/conf.php"
            ;;

            2)
                echo "Обновление AMSClock"
                cd amsclock
                git pull origin master
            ;;

            *) echo "Неверное значение" ;;
        esac
    ;;

    *) echo "Неверное значение" ;;
esac
