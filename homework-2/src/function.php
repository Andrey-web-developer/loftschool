<?php
function task1($arr, $true = false)
{
  $arr = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

  if ($true === true) {
    $str = implode($arr);

    return $str;
  } else {
    foreach ($arr as $value) {
      echo  '<p>' . $value . '</p>';
    }
  }
}

function task2(...$numbers)
{
  for ($i = 1; $i < count($numbers); $i++) {
    $elem = $numbers[$i];
    if (is_int($elem) || is_float($elem)) {
      continue;
    } else {
      echo 'Ошибка! Не верный тип данных';
      return;
    }
  }

  $plus = $numbers[0];
  $sum = 0;

  foreach ($numbers as $number) {
    if ($number === $plus) {
      continue;
    } else {
      $sum += $number;
    }
  }

  $expression = '';

  for ($i = 1; $i < count($numbers); $i++) {
    if ($i === count($numbers) - 1) {
      $expression .= $numbers[$i];
    } else {
      $expression .= $numbers[$i] . $plus;
    }
  }

  echo 'Результат: ' . $expression . ' = ' . $sum;
}

function task3($num_one, $num_two)
{
  if (!is_int($num_one) || !is_int($num_two)) {
    echo 'Ошибка! В функцию переданы данные с типом отличающимся от int';
    return;
  }
  // Иттеративный подход
  echo '<table>';
  echo '<thead>' . '<tr>' . '<th colspan="10">' . 'Таблица умножения' . '</th>' . '</tr>' . '</thead>';
  echo '<tbody>';

  for ($i = 1; $i <= $num_two; $i++) {
    echo '<tr>';

    for ($j = 1; $j <= $num_one; $j++) {
      $result = $i * $j;

      echo '<td style="padding-right: 30px;">';
      echo $j . ' * ' . $i . ' = ' . $result;
      echo '</td>';
    }

    echo '</tr>';
  }

  echo '</tbody>' . '</table>';
  // ------------------------------------------------------------------------------------------------------------------

  // Рекурсивный подход
  echo '<br>' . '<br>';

  function recursion($num_one, $num_two)
  {
    for ($i = 1; $i <= $num_one; $i++) {
      if ($num_two < 1) {
        return;
      }

      $result = $i * $num_two;

      echo $i . ' * ' . $num_two . ' = ' . $result . '<br>';
      
      recursion($num_one, $num_two - 1);
    }
  }

  recursion($num_one, $num_two);
}

function task4()
{
  echo date('d.m.Y H:i');
  echo '<br>';

  echo mktime(
    $hour = 0,
    $minute = 0,
    $second = 0,
    $month = 2,
    $day = 24,
    $year = 2016
  );

  echo '<br>';
  echo date('d.m.Y H:i', 1456261200);
}

function task5()
{
  $str = 'Карл у Клары украл Кораллы';
  $str2 = 'Две бутылки лимонада';

  echo mb_strtolower($str);
  echo '<br>';
  echo str_replace('Две', 'Три', $str2);
}

function task6()
{
  file_put_contents('test.txt', 'Hello again');
}

function task7()
{
  $file = file_get_contents('test.txt');

  echo $file;
}
