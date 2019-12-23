<?php
    function validate_form() {
        if(strlen($_POST['name']) < 2) {
            return false;
        }else {
            return true;
        }
    }

    function procces_form() {
        print "Здравствуй, ". $_POST['name'];
    }

    function show_form() {
        print<<<_HTML_
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Task 6.2</title>
    </head>
    <body STYLE="background-color: gray ">
        <form method="POST" action="">
            <p>Как тебя зовут? : <input type="text" name="name"></p>
            <br/>
            <input type="submit" value="Нажми на меня!">
        </form>
    </body>
</html>
_HTML_;
}


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (validate_form()) {
            procces_form();
        }else {
            show_form();
        }
    }else {
        show_form();
    }
?>