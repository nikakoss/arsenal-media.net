<?php 
    //header('refresh:3;url='. $_POST['c_url']); 
    date_default_timezone_set('Europe/Minsk');
    $now = date('H:i:s');
?>
<!--meta charset="UTF-8" /-->
<?php
        $title = '';
        $c_url = '';
    if (isset($_POST['name'])) {
        $name = $_POST['name']; 
        if ($name == '') {
            unset($name);
        }
    }
    if (isset($_POST['phone'])) {
        $phone = $_POST['phone']; 
        if ($phone == '') {
            unset($phone);
        }
    }

    if (isset($_POST['title'])) {
        $title = $_POST['title']; 
        if ($title == '') {
            unset($title);
        }
    }

    if (isset($_POST['c_url'])) {
        $c_url = $_POST['c_url']; 
        if ($c_url == '') {
            unset($c_url);
        }
    }

    if (isset($name) && isset($phone)){

        $address = "sales@arsenal-media.net";
        //$address = "Runner_evp@mail.ru";
        $mes = "Имя: $name \nТелефон:  $phone \nНазвание страницы: $title\nАдрес страницы: $c_url";
        $send = mail ($address,"Заявка на звонок",$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:robot@arsenal-media.net");
        if ($send == 'true') {
            if(strtotime('9:00:00') < strtotime($now) && strtotime($now) < strtotime('18:00:00')){
                echo "Спасибо, мы вам перезвоним в течении 30 минут.";
            } else {
                echo "Мы вам перезвоним в рабочее время завтра";
            }
        } else {
            echo "Ошибка, сообщение не отправлено!";
        }

    } else {
        echo "Вы заполнили не все поля, необходимо вернуться назад!";
    }
?>
