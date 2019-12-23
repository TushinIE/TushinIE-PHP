<?php
function validate_state(){
    if ($_POST['state'] == 'США') {
        true;
    } else {
        print $_POST['state'] . " - Невозможно отправить туда посылку";
        return false;
    }
}
function validate_ves() {
    if($_POST['ves'] <= '68') {
        true;
    }else {
        print $_POST['ves'] . " - Посылка имеет слишком большой вес";
        return false;
    }
}
function validate_razmer() {
    if($_POST['razmer'] <= '91') {
        true;
    }else {
        print $_POST['razmer'] . " - Посылка имеее слишком большой размер";
        return false;
    }
}
function show_form() {
    print<<<_HTML_
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Task 6.4</title>
    </head>
    <body STYLE="background-color: gray ">
        <form method="POST" action="">
            <p>Страна получателя : <input type="text" name="state"></p>
            <p>Страна отправителя : <input type="text" name="country"></p>
            <p>Вес посылки : <input type="text" name="ves"></p>
            <p>Размер посылки: <input type="text" name="razmer"></p>
            <br/>
            <input type="submit" value="Отправить посылку">
        </form>
    </body>
</html>
_HTML_;
}
    if (validate_ves() || validate_razmer() || validate_state()) {
        print "Страна получателя = ". $_POST['state'];
        print "Страна отправителя = ". $_POST['country'];
        print "Размер посылки = ". $_POST['razmer'];
        print "Вес посылки = ". $_POST['ves'];
    }else {
        show_form();
    }
?>