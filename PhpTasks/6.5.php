<?php
    function validate_form() {
        if(strlen($_POST['name']) < 2) {
            return false;
        }else {
            return true;
        }
    }

    function procces_form() {
        print_r ($_POST);
    }
	function show_form() {
		print<<<_HTML_
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Task 6.5</title>
    </head>
    <body STYLE="background-color: gray ">
        <form method="POST" action="">
            <p>Введите ваше имя : <input type="text" name="name"></p>
            <p>Введите вашу фамилию : <input type="text" name="subname"></p>
            <p>Укажите ваш возраст : <input type="text" name="age"></p>
            <p>Укажите ваш пол : <select name="sex">
                        <option value="men">Мужской</option>
                        <option value="women">Женский</option>
                     </select>
            <br/>
            <input type="submit" value="Отправить">
        </form>
    </body>
</html>
_HTML_;
}
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (validate_form()) {
			procces_form();
		}
	}else {
		show_form();
	}
?>