<?php
// while文-------------------------------
while ($line = fgets(STDIN)) {
   $tmp[] = trim($line);
}
var_dump($tmp);

// foreach文-------------------------------
// 配列の各要素をさらに分解します
foreach ($tmp as $key => $value) {
  $array[] = explode(" ", $value);
  var_dump($array);
}

// for文-------------------------------
for ($i = 1; $i <= $count; $i++) {
    $line[] = explode(" ", trim(fgets(STDIN)));
}


// -------------------------------


// 標準入力が一行の場合
$input = explode(" ", trim(fgets(STDIN)));
var_dump($input);









// ファイルパスの指定
$file = fopen(".../path/to/stdin.txt", "r");
// ファイル内容の読み込み
$input = fgets($file);
// 入力値の分解
$array = explode(" ", $input);
// ファイルパスを閉じる
fclose($file);
// 標準入力が複数行の場合
// 1行ずつ代入するっていうのがちょっとめんどくさいですね。


// 自分の環境でテストする場合
// ファイルパスの指定
$file = fopen(".../path/to/stdin.txt", "r");

// ファイルの内容を一行ずつ配列に代入します
if($file) {
  while ($line = fgets($file)) {
    $tmp[] = trim($line);
  }
}

// 配列の各要素をさらに分解します
foreach ($tmp as $key => $value) {
  $array[] = explode(" ", $value);
}

// ファイルパスを閉じる
fclose($file);



//ドリル問題 -------------------------------

// C 単語のカウント -------------------------------
$input = explode(" ", trim(fgets(STDIN))); //red green blue blue green blue
$count = count($input); //6

$array = array_count_values($input);

foreach ($array as $key =>$value) {
    echo $key . " " ;
    echo $value . "\n";
}


// C Fizz Buzz -------------------------------
$count = trim(fgets(STDIN)); //5

for($i=1; $i<=$count; $i++){
    if ($i%3 == 0 && $i%5 == 0) {
        echo "Fizz Buzz". "\n" ;
    } elseif ($i%5 == 0) {
        echo "Buzz". "\n";
    } elseif ($i%3 == 0) {
        echo "Fizz". "\n";
    } else {
        echo  $i . "\n" ;
    }
}


// D 成人の人数を数える-------------------------------
//-- SQLを書こう！

// SELECT COUNT(AGE) from user_age
// where age >= 20 ;


// D 数の並び替え-------------------------------
$count = trim(fgets(STDIN));//5

 while ($line = fgets(STDIN)) { //$tmp=[3, 5, 19, 1, 2];
   $tmp[] = trim($line);
 }

 for ($i = 0; $i <= $count; $i++) { //0,1,2,3,4,5
     for ($n=1; $n < $count; $n++) { //1,2,3,4
         if ($tmp[$n-1] > $tmp[$n]) {
             $v = $tmp[$n-1]; //$vに1代入
             $tmp[$n-1] = $tmp[$n]; //$id[7]に$id[8]の内容(16)を代入
             $tmp[$n] = $v;
         }
     }
 }
   echo implode("\n", $tmp);



// D 掛け算-------------------------------
$s = trim(fgets(STDIN)); //4
$i = trim(fgets(STDIN)); //5
echo $s * $i; //20;


// -------------------------------
// -------------------------------
