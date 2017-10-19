<!-- <?php

$i = 1;
for($i=1; $i<=100; $i++){
switch ($i) {
    case ($i%3 == 0 && $i%5 == 0):
        echo "fizz&buzz";
        break;
    case ($i%5 == 0):
        echo "buzz";
        break;
    case ($i%3 == 0):
        echo "fizz";
        break;
    case !($i%3 == 0 || $i%5 == 0):
        echo "<br>" . $i . "<br>";
        break;

    default:
        break;
  }
}
?>
 -->




<?php
//3の倍数の時に「fizz」, 5の倍数の時に「buzz」,3と5の倍数に「fizz&buzz」表示
//それ以外の場合は数字表示
$i = 1;
for($i=1; $i<=100; $i++){
switch ($i) {
    case ($i%3 == 0 && $i%5 == 0):
        echo "fizz&buzz" . "<br>";
        break;
    case ($i%5 == 0):
        echo "buzz". "<br>";
        break;
    case ($i%3 == 0):
        echo "fizz". "<br>";
        break;
    default:
    echo "<br>" . $i . "<br>";
        break;
  }
}
?>


<?php
//3の倍数の時に「fizz」, 5の倍数の時に「buzz」,3と5の倍数に「fizz&buzz」表示
//それ以外の場合は数字表示
$i = 1;
for ($i=1; $i <=100 ; $i++) {
  if ($i%3 == 0 && $i%5 == 0) {
    echo "fizz&buzz" . "<br>";
  } elseif ($i%5 == 0) {
    echo "buzz". "<br>";
  } elseif ($i%3 == 0) {
    echo "fizz". "<br>";
  } else {
    echo "<br>" . $i . "<br>";
  }
}
?>

<?php while ($i++ <= 100) {
  # code...
}
?>
