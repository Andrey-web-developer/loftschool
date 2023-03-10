<?php
function task1()
{
  $generationName = function () {
    $names = ['Алексей', 'Арина', 'Евгений', 'Егор', 'Полина'];

    $randomName = mt_rand(0, 4);

    return $names[$randomName];
  };

  $users = [];

  for ($i = 0; $i < 50; $i++) {

    $users[$i]['id'] = $i;

    $users[$i]['name'] = $generationName();

    $users[$i]['age'] = mt_rand(18, 45);
  }

  return $users;
};

$usersArr = task1();

writeJson($usersArr);

function writeJson($usersArr)
{
  $usersJson = json_encode($usersArr);

  file_put_contents('users.json', $usersJson);
}

function getJson()
{
  $data = json_decode(file_get_contents('users.json'), true);

  return $data;
}

// countName(getJson());

function countName($arrUsers)
{
  $nameAleks = 0;
  $nameArina = 0;
  $nameEvgeniy = 0;
  $nameEgor = 0;
  $namePolina = 0;

  foreach ($arrUsers as $arr) {
    if (in_array('Алексей', $arr, true)) {
      $nameAleks += 1;
    }

    if (in_array('Арина', $arr, true)) {
      $nameArina += 1;
    }

    if (in_array('Евгений', $arr, true)) {
      $nameEvgeniy += 1;
    }

    if (in_array('Егор', $arr, true)) {
      $nameEgor += 1;
    }

    if (in_array('Полина', $arr, true)) {
      $namePolina += 1;
    }
  }

  echo 'Число Алексеев в массиве: ' .  $nameAleks . '<br>';
  echo 'Число Арин в массиве: ' .  $nameArina . '<br>';
  echo 'Число Евгениев в массиве: ' .  $nameEvgeniy . '<br>';
  echo 'Число Егоров в массиве: ' .  $nameEgor . '<br>';
  echo 'Число Полин в массиве: ' .  $namePolina;
}

// countAverageAge(getJson());

function countAverageAge($arrUsers)
{
  $amountAge = 0;

  foreach ($arrUsers as $key => $arr) {
    $amountAge += $arrUsers[$key]['age'];
  }

  $averageAge = $amountAge / count($arrUsers);

  echo $averageAge;
}
