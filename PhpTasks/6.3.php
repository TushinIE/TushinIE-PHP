<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8"
    <title>Task 6.3</title>
</head>
<body STYLE="background-color: gray ">
    <form action="" method="post">
        <p>Значение №1:<br><input type="text" name="1"></p>
        <p>Значение №2:<br><input type="text" name="2"></p>
        <p><select size="3" multiple name="operant">
                <option disabled>Выберите необходимую операцию</option>
                <option value="/">Деление</option>
                <option value="*">Умножение</option>
                <option value="-">Вычитание</option>
                <option value="+">Сложение</option>
				<option value="**">Возведение в степень</option>
            </select></p>
        <input type="submit" value="Вычислить">
    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $a = $_POST[1];
        $b = $_POST[2];
        $c = $_POST['operant'];


        if(is_integer((int)$_POST[1])) {
            if($c == '*') {
                $d = $a * $b;
            }
            if($c == '/'){
                $d = $a / $b;
            }
            if($c == '+'){
                $d = $a + $b;
            }
            if($c == '-'){
                $d = $a - $b;
            }
			 if($c == '**'){
                $d = $a ** $b;
            }
            print"<h1 style='text-align: center'>{$a} {$c} {$b} = {$d}</h1>";

        }


    }

    ?>
</body>
</html>