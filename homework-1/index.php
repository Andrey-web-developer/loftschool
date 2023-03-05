<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Первое задание</title>
</head>

<body>
  <?php
  // Задание 1
  echo 'Задание 1' . '<br>';

  $name = 'Андрей';
  $age = '23';

  echo "Меня зовут: $name" . '<br>' . "Мне $age года";

  echo '<br>' . '"!|/\'"\\';
  // -------------------------------------------------------------------------------------------------------
  // Задание 2
  echo '<br>' . 'Задание 2' . '<br>';

  const TOTAL_DRAWINGS = 80;
  const MARKER_DRAWINGS = 23;
  const PENCIL_DRAWINGS = 40;

  const RESULT = TOTAL_DRAWINGS - (MARKER_DRAWINGS + PENCIL_DRAWINGS);

  echo TOTAL_DRAWINGS . ' - ' . '(' . MARKER_DRAWINGS . ' + ' . PENCIL_DRAWINGS . ')' . ' = ' . RESULT;
  // -------------------------------------------------------------------------------------------------------
  // Задание 3
  echo '<br>' . 'Задание 3' . '<br>';

  $age = mt_rand(-30, 130);

  if ($age >= 18 && $age <= 65) {
    echo $age . ' Вам еще работать и работать';
  } elseif ($age > 65) {
    echo $age . ' Вам пора на пенсию';
  } elseif ($age >= 1 && $age <= 17) {
    echo $age . ' Вам еще рано работать';
  } else {
    echo $age . ' Неизвестный возраст';
  }
  // -------------------------------------------------------------------------------------------------------
  // Задание 4
  echo '<br>' . 'Задание 4' . '<br>';

  $day = mt_rand(0, 10);

  switch (true) {
    case $day >= 1 && $day <= 5:
      echo $day . ' Это рабочий день';
      break;
    case $day === 6 || $day === 7:
      echo $day . ' Это выходной день';
      break;
    default:
      echo $day . ' Неизвестный день';
  }
  // -------------------------------------------------------------------------------------------------------
  // Задание 5
  echo '<br>' . 'Задание 5' . '<br>';

  $bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
  ];
  $toyota = [
    'model' => 'Camry',
    'speed' => 140,
    'doors' => 4,
    'year' => '2019'
  ];
  $opel = [
    'model' => 'Vectra',
    'speed' => 120,
    'doors' => 4,
    'year' => '2012'
  ];

  function resultArray($bmw, $toyota, $opel)
  {
    $result = [];

    foreach ($bmw as $key => $value) {
      $result['bmw'][$key] = $value;
    }
    foreach ($toyota as $key => $value) {
      $result['toyota'][$key] = $value;
    }
    foreach ($opel as $key => $value) {
      $result['opel'][$key] = $value;
    }

    return $result;
  }

  $result = resultArray($bmw, $toyota, $opel);

  renderCar($result);

  function renderCar($result)
  {
    function outputDisplay($result, $key)
    {
      echo 'CAR ' . $key . '<br>';
      echo $result[$key]['model'] . ' ';
      echo $result[$key]['speed'] . ' ';
      echo $result[$key]['doors'] . ' ';
      echo $result[$key]['year'] . '<br>';
    }

    foreach ($result as $key => $value) {
      if ($key === 'bmw') {
        outputDisplay($result, $key);
      }

      if ($key === 'toyota') {
        outputDisplay($result, $key);
      }

      if ($key === 'opel') {
        outputDisplay($result, $key);
      }
    }
  }
  // -------------------------------------------------------------------------------------------------------
  // Задание 6
  echo '<br>' . 'Задание 6' . '<br>';

  echo '<table>';
  echo '<thead>' . '<tr>' . '<th colspan="10">' . 'Таблица умножения' . '</th>' . '</tr>' . '</thead>';
  echo '<tbody>';

  for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';

    for ($k = 1; $k <= 10; $k++) {
      $num = $i * $k;

      if ($i % 2 === 0 && $k % 2 === 0) {
        $num = '(' . $i * $k . ')';
      }

      if ($i % 2 !== 0 && $k % 2 !== 0) {
        $num = '[' . $i * $k . ']';
      }

      echo '<td style="padding-right: 30px;">';
      echo $k . ' * ' . $i . ' = ' . $num;
      echo '</td>';
    }

    echo '</tr>';
  }

  echo '</tbody>' . '</table>';
  // -------------------------------------------------------------------------------------------------------
  ?>
</body>

</html>