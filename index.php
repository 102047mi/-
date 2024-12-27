<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практика 9.1</title>
</head>

<body>
    <!-- 1 -->
    <?php
    $names = ["Алиса", "Илья", "Аня", "Богдан", "Саша", "Давид"];

    foreach ($names as $name) {
        if (strpos($name, 'А') === 0 || strpos($name, 'а') === 0) {
            continue;
        }
        echo $name . "n";
    }
    ?>

    <!-- 2 задачу решил с помощью gpt, в строчках разобрался могу объяснить -->

    <?php

    $numbers = [];
    for ($i = 0; $i < 10; $i++) {
        $numbers[] = rand(1, 100);
    }

    echo "Сгенерированные числа: " . implode(", ", $numbers) . "n";

    $sum = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] > 50) {
            break;
        }
        $sum += $numbers[$i];
    }

    echo "Сумма чисел до первого числа больше 50: " . $sum . "n";
    ?>

    <!-- 3 -->

    <?php

    for ($i = 1; $i <= 20; $i++) {
        if ($i % 3 === 0) {
            continue;
        }
        echo $i . "n";
    }
    ?>


    <!-- 4 -->

    <?php

    $daysOfWeek = [
        'Понедельник',
        'Вторник',
        'Среда',
        'Четверг',
        'Пятница',
        'Суббота',
        'Воскресенье'
    ];


    foreach ($daysOfWeek as $day) {

        if ($day === 'Суббота' || $day === 'Воскресенье') {
            continue;
        }
        echo $day . "n";
    }
    ?>

    <!-- 5 -->

    <?php

    $numbers = [12, 7, 19, 25, 33, 42, 55, 68, 77, 89, 90, 102, 115, 130, 150];


    $foundNumber = null;


    for ($i = 0; $i < count($numbers); $i++) {

        if ($numbers[$i] % 5 === 0) {
            $foundNumber = $numbers[$i];
            break;
        }
    }


    if ($foundNumber !== null) {
        echo "Первое число, которое делится на 5: " . $foundNumber;
    } else {
        echo "Чисел, делящихся на 5, не найдено.";
    }
    ?>




    <!-- 6 -->
    <?php

    $fruits = array(
        "Яблоко" => 30,
        "Банан" => 20,
        "Груша" => 60,
        "Киви" => 80,
        "Апельсин" => 50,
        "Манго" => 55
    );


    foreach ($fruits as $fruit => $price) {

        if ($price > 50) {
            echo $fruit . "<br>";
        }
    }
    ?>

</body>

</html>