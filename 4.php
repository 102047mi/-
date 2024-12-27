<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Форма ввода данных</title>
</head>

<body>

    <form method="post">
        Имя: <input type="text" name="имя" required><br>
        Группа: <input type="text" name="группа" required><br>
        Пол:
        <input type="radio" name="пол" value="Мужской" required> Мужской
        <input type="radio" name="пол" value="Женский"> Женский <br>
        День рождения:
        <select name="день">
            <?php for ($i = 1; $i <= 31; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select><br>
        Месяц:
        <select name="месяц">
            <?php
            $месяцы = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
            foreach ($месяцы as $месяц): ?>
                <option value="<?= $месяц ?>"><?= $месяц ?></option>
            <?php endforeach; ?>
        </select><br>
        Год:
        <select name="год">
            <?php for ($i = 2021; $i >= 1900; $i--): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select><br>
        Наличие водительского удостоверения: <input type="checkbox" name="удостоверение"><br>
        <input type="submit" value="Отправить">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $день = $_POST['день'];
        $месяц = $_POST['месяц'];
        $год = $_POST['год'];
        $пол = $_POST['пол'];

        $возраст = date("Y") - $год;

        if (date("m") < (int)date("m", strtotime("$год-$месяц-$день"))) {
            $возраст--;
        }

        $лет_до_пенсии = ($пол == "Мужской") ? (65 - $возраст) : (63 - $возраст);

        echo "Ваш возраст: $возраст лет<br>";
        echo "Количество лет до пенсии: $лет_до_пенсии лет";
    }

    // я только не понял надо стилизовать или нет?(поэтому пока оставил текст в задании так)
    ?>

</body>

</html>