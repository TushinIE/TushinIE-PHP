<?php

session_start();
$errors = [];

$products = ['Пицца', 'Салат', 'Пирог', 'Суп', 'Котлетки с пюрешкой', 'Компот'];

if (!empty($_POST)) {
    if (!empty($_POST['order'])) {
        $order = [];
        foreach ($_POST['order'] as $product => $quantity) {
            if (empty($quantity)) continue;
            $order[$product] = $quantity;
        }

        $_SESSION['order'] = $order;
    }
}
?>

<form method="POST">
    <table>
        <tr>
            <th>Товар</th>
            <th>Кол-во</th>
        </tr>

        <?foreach ($products as $id => $name):?>
            <tr>
                <td><?=$name?></td>
                <td>
                    <input type="text" name="order[<?=$name?>]">
                </td>
            </tr>
        <?endforeach?>
    </table>

    <button>Отправить заказ</button>
</form>

<?if ($errors):?>
    <?foreach($errors as $error):?>
        <div class="error"><?=$error?></div>
    <?endforeach?>
<?endif?>
