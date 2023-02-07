

<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII=" rel="icon" type="image/x-icon">
    <title>Lesson 1</title>
</head>
<body>
<?php
/* #1
$a = 3;
echo '$a: ' . $a;
*/
/* #2
$a = 10;
$b = 2;

echo '$a + $b = ' . ($a + $b) . '<br>' . '$a - $b = ' . ($a - $b) . '<br>' . '$a * $b = ' . ($a * $b) . '<br>' . '$a / $b = ' . ($a / $b) . '<br>';
*/
/* #3
$c = 15;
$d = 2;
$result = $c + $d;

echo '$result: ' . $result;
*/
/* #4
$a = 10;
$b = 2;
$c = 5;

echo 'a + b + c = ' . ($a + $b + $c);
*/
/* #5
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;

echo '$result: ' . $result;
*/
/* #6
$text = 'Привіт, Світ!';

echo $text;
*/
/* #7
$text1='Привіт, ';
$text2='Світ!';

echo $text1 . $text2;
*/
/* #8
$name = "Kostya";

echo "Привіт, $name";
*/
/* #9
$age = 19;

echo "Мені $age років!";
*/
/* #10
$text = 'abcde';

echo "символ '$text[0]', символ '$text[2]', символ '$text[4]'"
*/
/* #11
$text = 'abcde';
$text[0] = '!';

echo $text;
*/
/* #12
$num = '12345';
$sum = 0;

for ($i = 0, $iMax = strlen($num); $i < $iMax; $i++) {
    $sum += $num[$i];
}

echo "sum: $sum" ;
*/
/* #13
$hour = 60 * 60;
$day = $hour * 24;
$month = $day * 30;

echo "В одній годині $hour секунд, в одній добі $day секунд, а в одному місяці $month секунд."
*/
/* #14
$hours = 73;
$minutes = 421;
$seconds = 1812;

while ($seconds >= 60) {
    $minutes++;
    $seconds -= 60;
}

while ($minutes >= 60) {
  $hours++;
  $minutes -= 60;
}

while ($hours >= 24) {
  $hours -= 24;
}

echo (strlen($hours) === 1 ? "0".$hours : $hours) . ":" . (strlen($minutes) === 1 ? "0".$minutes : $minutes) . ":" . (strlen($seconds) === 1 ? "0".$seconds : $seconds);
*/
/* #15
$num = 7;

echo '$num^2 = ' . $num**2;
*/
/* #16
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var;
*/
/* #17
$text = 'Я';
$text .=' хочу';
$text .=' знати';
$text .=' PHP!';
echo $text;
*/
/* #18
$var = 10;
$var++;
$var++;
$var--;
echo $var;
*/
/* #19
$var = 10;
$var += 7;
$var++;
$var--;
$var += 12;
$var *= 7;
$var -= 15;
echo $var;
*/
/* #20
$arr=['a', 'b', 'c'];

var_dump($arr);
*/
/* #21
$arr=['a', 'b', 'c'];

echo "1: $arr[0], 2: $arr[1], 3: $arr[2]";
*/
/* #22
$arr=['a', 'b', 'c', 'd'];

echo "$arr[0] + $arr[1], $arr[2] + $arr[3]"
*/
/* #23
$arr = [2, 5, 3, 9];
$result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);

echo "Result: " . $result;
*/
/* #24
$arr = [];
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
$arr[] = 4;
$arr[] = 5;

var_dump($arr);
*/
/* #25
$arr = ['a'=>1, 'b'=>2, 'c'=>3];

foreach ($arr as $key => $item) {
  if ($key === 'c') {
      echo $item . " ";
  }
}
*/
/* #26
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$sum = 0;

foreach ($arr as $item) {
  $sum += $item;
}

echo "Sum: $sum";
*/
/* #27
$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
$result = "";

foreach ($arr as $key => $item) {
  if ($key === 'Коля') $result .= "зарплата Колі: $item <br>";
  else if ($key === 'Петя') $result .= "зарплата Петрика: $item <br>";
}

echo $result;
*/
/* #28
$week = ['1' => 'Понеділок', '2' => 'Вівторок', '3' => 'Середа', '4' => 'Четвер', '5' => 'П\'ятниця', '6' => 'Субота', '7' => 'Неділя'];

print_r($week[5]);
*/
/* #29
$week = ['1' => 'Понеділок', '2' => 'Вівторок', '3' => 'Середа', '4' => 'Четвер', '5' => 'П\'ятниця', '6' => 'Субота', '7' => 'Неділя'];
$day = 4;

foreach ($week as $key => $item) {
  if ($key === $dayToday) {
    echo "Сьогодні $item";
    break;
  }
}
*/
/* #30
$arr = ['cms'=>['joomla', 'wordpress', 'drupal'], 'colors'=>['blue'=>'блакитний', 'red'=>'червоний', 'green'=>'зелений']];
$result = "";

foreach ($arr['cms'] as $item) {
  if ($item === 'joomla') {
    $result .= "joomla,";
  }
  else if ($item === 'drupal') {
    $result .= "drupal,";
  }
}

foreach ($arr['colors'] as $item) {
  if ($item === 'зелений') {
    $result .= "зелений,";
  }
  else if ($item === 'червоний') {
    $result .= "червоний,";
  }
}

if ($result{strlen($result)-1} === ',') {
  $str = substr($result,0,-1);
}

echo $result;
*/
/* #31
$arr = [
  'ua' => ['Понеділок', 'Вівторок', 'Середа', 'Четвер', 'П\'ятниця', 'Субота', 'Неділя'],
  'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
];
$result = "";

foreach ($arr['ua'] as $item) {
    if ($item === 'Понеділок') {
        $result .= "$item ";
    }
}

foreach ($arr['en'] as $item) {
  if ($item === 'Wednesday') {
    $result .= "$item ";
  }
}

echo  $result;
*/
/* #32
$arr = [
  'ua' => ['Понеділок', 'Вівторок', 'Середа', 'Четвер', 'П\'ятниця', 'Субота', 'Неділя'],
  'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
];
$lang = 'ua';
$day = 3;
$result = "";

if ($lang === 'en') {
    $day--;

    foreach ($arr['en'] as $key => $item) {
      if ($key === $day) {
          $result .= $item;
      }
    }
} else if($lang === 'ua') {
  $day--;

  foreach ($arr['ua'] as $key => $item) {
    if ($key === $day) {
      $result .= $item;
    }
  }
}

echo $result;
*/
?>
</body>
</html>