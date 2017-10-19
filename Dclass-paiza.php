<?php
// D002:数の比較 -------------------------------

    $i = trim(fgets(STDIN));
    $array = explode(" ", $i);
    if ($array[0] > $array[1]) {
       echo $array[0];
    } elseif ($array[0] < $array[1]) {
        echo $array[1];
    } elseif ($array[0] == $array[1]) {
        echo "eq";
    }

// D003:掛け算のリスト -------------------------------

    $input = fgets(STDIN); //5
    echo trim($input);
    for ($i=2; $i < 10; $i++) {
        echo " " . $input * $i;
    }

// D004:文字列の結合 -------------------------------

    while ($line = fgets(STDIN)) {
        $tmp[] = trim($line);
    }
    for ($i = 0; $i < $tmp[0]; $i++) { //3
        $input = implode(",", $tmp);
        $input = str_replace("$tmp[0]," , "Hello ", $input);
    }
    echo $input . ".";

// D005:等差数列 -------------------------------

    $input = fgets(STDIN);
    // 取得した入力値を半角スペースで分解します
    $array = explode(" ", $input); //5 10
    $input = str_replace(PHP_EOL, '', $input);
    $m = $array[0];
    $n = $array[1];
    echo $m;
    for ($i=1; $i < 10; $i++) {
    echo " " . $m += $n . " ";
    }

// D006:単位の計算 -------------------------------

    $input = fgets(STDIN);
    $array = explode(" ", $input);
    $array = str_replace(PHP_EOL, '', $array);

    if ($array[1] === "km") {
        echo $array[0] . "000000";
    } elseif ($array[1] == "m") {
        echo $array[0] . "000";
    } elseif ($array[1] == "cm") {
        echo $array[0] . "0";
    }

// D007:N倍の文字列 -------------------------------

    $input = trim(fgets(STDIN));
    for ($i = 0; $i < $input; $i++) {
         echo "*";
    }

// D008:奇数か偶数か -------------------------------

    $str = trim(fgets(STDIN));
    if ($str %2 == 0) {
        echo "even";
    } else {
       echo "odd";
    }

// D009:西暦の計算 -------------------------------

    $i = fgets(STDIN);
    // 取得した入力値を半角スペースで分解します
    $array = explode(" ", $i);
    $array = $array[1] - $array[0];
    echo $array;

// D010:Eメールアドレス -------------------------------

    // 標準入力が複数行の場合
    // 標準入力を一行ずつ配列に代入します
    while ($line = fgets(STDIN)) {
      $tmp[] = trim($line);
    }
    echo $tmp[0] . "@" . $tmp[1];

// D011:アルファベットで何番目 -------------------------------

    $input = fgets(STDIN);
    $target = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T",
                  "U", "V", "W", "X", "Y", "Z");
    $replace = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14","15", "16", "17", "18",
                  "19", "20", "21", "22", "23", "24", "25", "26");
    $replaceText = str_replace($target, $replace, $input);
    echo $replaceText;

// D012:絶対値を求めよ -------------------------------

    $str = trim(fgets(STDIN)); //-10
    echo abs($str);

// D013:割り算 -------------------------------

    $input = fgets(STDIN);
    $array = explode(" ", $input);
    $array[0] = floor($array[0]);
    $array[1] = floor($array[1]);
    echo floor($array[0] / $array[1]) . " " . floor($array[0] % $array[1]);

// D014:小文字を大文字に -------------------------------

    $str = trim(fgets(STDIN));
    $str = mb_strtoupper($str);
    echo $str;

// D015:カウントダウン -------------------------------

    // 標準入力から1行取得し$inputに代入
    $str = trim(fgets(STDIN)); //3

    for ($k=1; $k <= $str; $k++) {
    $array[] = $k;
    }
    $matches = array_reverse($array);
    foreach ($matches as $value) {
      echo $value . "\n";
    }

// D016:N文字目まで出力 -------------------------------

    $input = trim(fgets(STDIN));
    $count = (fgets(STDIN));
    echo substr($input, 0, $count);

// D017:最大と最小 -------------------------------

    while ($line = fgets(STDIN)) {
        $tmp[] = trim($line);
    }
    echo max($tmp) . "\n";
    echo min($tmp);

// D019:文字列からN番目 -------------------------------

    $input = fgets(STDIN);
    // 取得した入力値を半角スペースで分解します
    $array = explode(" ", $input);
    echo substr($array[0], $array[1]-1, 1);

// D021:文字列の一致 -------------------------------

    $line[] = fgets(STDIN);
    $line2[] = fgets(STDIN);

    if (array_diff($line, $line2) == false) {
      echo "Yes";
    } else {
      echo "No";
    }

// D022:表面積の計算 -------------------------------

    $i = fgets(STDIN);
    $i = 6 * ($i**2);
    echo $i;

// D023:Aの個数 -------------------------------

    $str = trim(fgets(STDIN));//PAIZA
    $count = strlen($str);//5
    $str = str_split($str, 1);
    $array = array("A");

    $result = array_diff($str, $array);

    echo $count - (count($result));

// D024:三角形の内角の和 -------------------------------

    $text = fgets(STDIN);
    $text2 = fgets(STDIN);
    echo 180 - ($text + $text2);

// D025:数字の出力 -------------------------------

    $input = fgets(STDIN);
    if ($input == 100) {
        echo $input;
    } elseif ($input < 10) {
        echo "00" . $input;
    } else {
       echo "0" . $input;
    }

// D026:一週間の予定 -------------------------------
    while ($line = fgets(STDIN)) {
        $tmp[] = trim($line);
    }
    $tmp = array_count_values($tmp);
    echo $tmp["no"];

// D027:nまでの和 -------------------------------

    $input = fgets(STDIN); //10
    $sum = 0;
    for ($i = 1; $i <= $input; $i++) { //1,2,3,4,5,6,7,8,9,10
    $sum += $i;
    }
    echo $sum;

// D028:数字の桁数 -------------------------------

    $input = trim(fgets(STDIN)); //100
    echo  strlen($input);

// D029:サイコロの裏面 -------------------------------

    $str = trim(fgets(STDIN)); //ABCDE
    echo 7 - $str;

// D031:分から秒へ -------------------------------

    $i = fgets(STDIN);
    echo $i * 60;

// D032:充電時間 -------------------------------

    $str = trim(fgets(STDIN));
    echo 100 - $str;

// D033:頭文字 -------------------------------

    $i = trim(fgets(STDIN));
    $array = explode(" ", $i);

    $a = substr($array[0], 0, 1);
    $a2 = substr($array[1], 0 ,1);
    echo $a . "." . $a2;

// D034:どれにしようかな -------------------------------

    $input = fgets(STDIN); //4
    if (21 % $input != 0) {
      echo 21 % $input;
    } else {
      echo $input;
    }

// D035:日付のデータ -------------------------------

    $input = fgets(STDIN);
    $array = str_replace(" ", "/", $input);
    echo $array;

// D036:アットマーク -------------------------------

    $input = fgets(STDIN);
    echo str_replace("at", "@", $input);

// D037:花粉症でつらい -------------------------------

    $M = floor(fgets(STDIN));
    $N = floor(fgets(STDIN));
    $sum = 0;
    if (floor($N % $M) != 0) {
      $sum = 1;
    }
    echo floor($N / $M) + $sum;

// D038:試合の回数 -------------------------------

    $i = fgets(STDIN);
    $n = $i * ($i - 1) / 2;
    echo $n;

// D039:正三角形かどうか -------------------------------

    $input1 = fgets(STDIN);
    $input2 = fgets(STDIN);
    $input3 = fgets(STDIN);

    if (($input1 == $input2) == $input3) {
       echo "YES";
    }else {
        echo "NO";
    }

// D040:連休の天気 -------------------------------

    $count = 0;
    for ($i = 1; $i <= 7; $i++) {
        $line = fgets(STDIN);
        $tmp = trim($line);
        if ($tmp <= 30) {
            $count += 1;
        }
    }
    echo $count;

// D041:本棚選び -------------------------------

    $input = fgets(STDIN);
    // 取得した入力値を半角スペースで分解します
    $array = explode(" ", $input);

    $n = $array[0];
    $d = $array[1];
    $e = $array[2];

    if ($n < ($d * $e)) {
      echo "OK";
    } else {
        echo "NG";
    }

// D042:行列 -------------------------------

    $input = fgets(STDIN);
    $input2 = fgets(STDIN);
    // 取得した入力値を半角スペースで分解します
    $array = explode(" ", $input);
    $array2 = explode(" ", $input2);
    echo ($array[0] * $array2[1]) - ($array[1] * $array2[0]);

// D043:天気の表示 -------------------------------

// ・降水確率が 0 % 以上 30 % 以下ならば "sunny"
// ・降水確率が 31 % 以上 70 % 以下ならば "cloudy"
// ・降水確率が 71 % 以上ならば "rainy"
    $input = fgets(STDIN);
    if ($input < "30") {
      echo "sunny";
    } elseif ($input > "30" && $input < "71") {
      echo "cloudy";
    } elseif ($input > "71") {
      echo "rainy";
    }

// D044:はじめまして -------------------------------

    $input = fgets(STDIN);
    // 取得した入力値を半角スペースで分解します
    $input = explode(" ", $input);
    $array = str_replace(PHP_EOL, '', $input);
    if ($array[1] == "M") {
        echo "Hi, Mr. " . $array[0];
    } else {
        echo "Hi, Ms. " . $array[0];
    }

// D045:通知票 -------------------------------

    $input = fgets(STDIN);
    $target = array("5", "4", "3", "2", "1");
    $replace = array("A", "B", "C", "D", "E");
    $replaceText = str_replace($target, $replace, $input);
    echo $replaceText;

// D046:不思議なタマゴ -------------------------------

    $input = fgets(STDIN);
    $array = explode(" ", $input);
    echo max($array);

// D047:メダリストの表示 -------------------------------

    while ($line = fgets(STDIN)) {
      $tmp[] = trim($line);
    }
      echo "Gold " . $tmp[0] . "\n";
      echo "Silver " . $tmp[1] . "\n";
      echo "Bronze " . $tmp[2] . "\n";

// D048:台風の間隔 -------------------------------

      $input1 = fgets(STDIN);
      $input2 = fgets(STDIN);
      $input3 = fgets(STDIN);
      $input4 = fgets(STDIN);
      $input5 = fgets(STDIN);

      echo $input2 - $input1 . "\n";
      echo $input3 - $input2 . "\n";
      echo $input4 - $input3 . "\n";
      echo $input5 - $input4 . "\n";

// D049:◯◯の秋 -------------------------------

      $input = fgets(STDIN);
      if (strpos($input, "noaki")) {
          echo str_replace("noaki", "", $input);
      } else {
          echo $input;
      }

// D050:お月見だんご -------------------------------

      $input = fgets(STDIN);
      $array = explode(" ", $input);
      if ($array[0] <= 5) {
          $g = $array[0];
      } elseif ($array[0] >= 5) {
          $g = 5;
      }
      if ($array[1] <= 5) {
          $i = $array[1];
      } elseif ($array[1] >= 5) {
          $i = 5;
      }
      echo $g + $i;

// D051:衣替え -------------------------------

      $i = fgets(STDIN);
      $i = str_replace(PHP_EOL, '', $i);
      $array = explode(" ", $i);
      $array2 = array("S");
      $result = array_diff($array, $array2);
      if (count($result) >= 5) {
        echo "OK";
      } else {
          echo "NG";
      }

// D052:ピラミッドの作り方 -------------------------------

    $input = fgets(STDIN); //10
    $sum = 0;
    for ($i = 1; $i <= $input; $i++) { //1,2,3,4,5,6,7,8,9,10
    $sum += $i;
    }
    echo $sum;

// D053:トリック・オア・トリート -------------------------------

    $input = trim(fgets(STDIN));
    if ($input == "chocolate" || $input == "candy") {
        echo "Thanks!";
    } else {
        echo "No!";
    }

// D054:11/11 -------------------------------

    $input = trim(fgets(STDIN));
    $input = str_split($input);
    if (count($input) > 11) {
      echo "OK";
    }else {
       echo 11 - count($input);
    }

// D055:ワインのキャッチコピー -------------------------------

    $i = fgets(STDIN);
    // 取得した入力値を半角スペースで分解します
    echo "Best in " . $i;

// D056:かまくらづくり -------------------------------

    // r1 = 5, r2 = 2
    // → かまくらの体積 = 5^3 - 2^3 = 125 - 8 = 117 m^3
    $input = fgets(STDIN);
    $array = explode(" ", $input);
    echo($array[0]**3) - ($array[1]**3);

// D057:プレゼント選び -------------------------------

    $input = fgets(STDIN);
    $pre = fgets(STDIN);
    $pre = explode(" ", $pre);
    if ($input == 3) {
      echo $pre[2];
    } elseif ($input == 2) {
      echo $pre[1];
    } elseif ($input == 1) {
      echo $pre[0];
    }

// D058:初詣で -------------------------------

    $input = fgets(STDIN);
    // 取得した入力値を半角スペースで分解します
    $array = explode(" ", $input);
    for ($i = 0; $i < $array[0]; $i++) {
        echo "A";
    }
    for ($i = 0; $i < $array[1]; $i++) {
        echo "B";
    }
    for ($i = 0; $i < $array[2]; $i++) {
        echo "A";
    }

// D059:トランプ占い -------------------------------

    $input = fgets(STDIN);
    $input = str_replace(PHP_EOL, '', $input);
    $array = explode(" ", $input);
    if ($array[0] == "J" && $array[1] == "J") {
        $array[1] = "Q";
    }
    echo $array[0] . " " . $array[1];

// D060:AボタンとBボタン -------------------------------

    $i = fgets(STDIN);
    // 取得した入力値を半角スペースで分解します
    $array = explode(" ", $i);
    echo $array[0] - $array[1];

// D061:3倍返し？ -------------------------------

    $input = trim(fgets(STDIN));
    if ($input == 0) {
        echo 1;
    } else {
        echo $input * 3;
    }

// D062:ひな祭り -------------------------------

    $array = [
        "1" => "A",
        "2" => "B",
        "3" => "C",
        "4" => "D",
        "5" => "E",
        "6" => "F",
        "7" => "G",
        "8" => "H",
        "9" => "I",
        "10" => "J",
    ];
    $input = fgets(STDIN);
    $count = str_replace(PHP_EOL, '', $input);
    $count = explode(" ", $count);
    $_1 = $count[0]; //1
    $_2 = $count[1]; //1
    $_8 = $count[2]; //8

    for ($i = 1; $i <= $_1; $i++) { //1
       echo $array[$i];
    }
    echo "\n";
    for ($v = $i; $v < $i+$_2; $v++) { //$v = 1+1=2; 2 <= 1+1
      echo $array[$v];
    }
    echo "\n";
    for ($a = $v; $a <= 10; $a++) {//$a=2,
      echo $array[$a] ;
    }

// D063:お花見の場所取り -------------------------------

    $input = fgets(STDIN);
    // 取得した入力値を半角スペースで分解します
    $array = explode(" ", $input);  //"0 10 23 35 57"
    $array = str_replace(PHP_EOL, '', $array);
    $me = trim(fgets(STDIN));
    if ($array[0] > $me) {
        echo "1";
    } elseif ($array[1] > $me) {
        echo "2";
    } elseif ($array[2] > $me) {
        echo "3";
    } elseif ($array[3] > $me) {
        echo "4";
    } elseif ($array[4] > $me) {
        echo "5";
    } elseif ($array[4] < $me) {
        echo "6";
    }

// D064:嘘つきの日 -------------------------------

    $input = fgets(STDIN);
    $input = str_replace(PHP_EOL, '', $input);
    if (strpos($input, "False") !== false) {
        echo (str_replace("False", "True", $input));
    } else {
        echo $input;
    }

// D065:エラーコードの分類 -------------------------------

    $input = trim(fgets(STDIN)); //404
    if (substr($input, 0, 1) == 2) {
     echo "ok";
    } elseif (substr($input, 0, 1) == 4) {
         echo "error";
    } else {
       echo "unknown";
    }

// D066:スタミナの計算 -------------------------------

    $i = fgets(STDIN);
    $array = explode(" ", $i);
    if (($array[1] - $array[0]) < 0) {
        echo "No";
    } else {
        echo $array[1] - $array[0];
    }

// D067:スイッチのオンオフ -------------------------------

    $i = fgets(STDIN);
    if ($i%2 == 0 ) {
      echo "OFF";
    } elseif ($i%2 != 0) {
      echo "ON";
    }

// D068:雨と晴れの記録 -------------------------------

    $count = trim(fgets(STDIN));//5
    $str = trim(fgets(STDIN));//SSRSR
    $str = str_split($str, 1);
    $array = array("S");
    $result = array_diff($str, $array);
    echo $count - (count($result)) . " " . (count($result));

// D069:割り切れない平均点-------------------------------

    $input = fgets(STDIN);
    $array = str_replace(PHP_EOL, '', $input);
    $array = explode(" ", $array);
    $num = array_sum($array);
    $num = round($num / 7 , 1) ;
    if (preg_match("/^[0-9]+$/", $num) == TRUE) {
        echo $num . ".0";
    } elseif ($num < 10) {
        echo "0" . $num;
    } elseif ((substr($num, -1)) == 0) {
        echo $num . ".0";
    } else {
        echo $num;
    }

// D070:残りのページ -------------------------------

    // 標準入力からの入力値を変数に代入します
    $input_line = fgets(STDIN);
    // 取得した入力値を半角スペースで分解します
    $array = explode(" ", $input_line);
    // 単一行の入力の場合はこれだけで各入力値が配列の要素として使えます
    $array = $array[0] - $array[1];
    echo $array;

// D071:洗濯物と砂ぼこり -------------------------------

    $input = fgets(STDIN);
    $array = str_replace(PHP_EOL, '', $input);
    $array = explode(" ", $array);
    $t = $array[0]; //25 気温
    $m = $array[1]; //50 湿度

    if ($t > 25 && $m < 40) { //気温が 25 ℃以上かつ、湿度 40 % 以下の日は砂ぼこりが舞うので干しません。
        echo "No";
    } elseif ($t >= 25) { //気温が 25 ℃以上の日、もしくは湿度が 40 % 以下の日は干します。
        echo "Yes";
    } elseif ($m <= 40) {
        echo "Yes";
    } else {
        echo "No";
    }

// D072:データのバックアップ -------------------------------

    $input = fgets(STDIN);
    // 取得した入力値を半角スペースで分解します
    $input = explode(" ", $input);
    $array = str_replace(PHP_EOL, '', $input);
    $X = $array[0]; //30
    $Y = $array[1]; //3
    $P = $array[2]; //100

    if (($X / $Y) <= 1) { //10÷3=3...1
        echo 1 * $P;
    } elseif (($X % $Y) == 0) {
        echo (round($X / $Y)) * $P ;
    } else {
        echo (round($X / $Y) + 1) * $P ; //(10÷3= 3 + 1) * 10
    }

// D073:文字の反転 -------------------------------

    // 標準入力から1行取得し$inputに代入
    $str = trim(fgets(STDIN)); //ABCDE
    $length = mb_strlen($str); //5

    for ($k=0; $k<$length; $k++) {
        $matches = array();
        for ($i=0; $i<$length; $i++) {
            $matches[] = mb_substr($str, $i, 1, "UTF-8");
        }
    }
    $matches = array_reverse($matches);
    foreach ($matches as $value) {
      echo $value;
    }

// D074:時間の表記 -------------------------------

    $i = trim(fgets(STDIN));
    $i = round($i);
    if ($i < 24) {
       echo $i;
    } elseif($i >= 24) {
       echo $i - 24;
    }

// D075:足りないカード -------------------------------

    $input1 = fgets(STDIN);
    $input2 = fgets(STDIN);
    $input3 = fgets(STDIN);
    $input4 = fgets(STDIN);
    echo 15 - ($input1 + $input2 + $input3 + $input4);

// D077:計算機の表示 -------------------------------

    $str = trim(fgets(STDIN)); //ABCDE
    // 取得した入力値を半角スペースで分解します
    $array = explode(" ", $str);
    $array = $array[0] * $array[1];
    if ($array < 9999) {
    echo $array;
    }else {
      echo "NG";
    }

// D078:入学試験-------------------------------

    $input = explode(" ",fgets(STDIN));
    $input = str_replace(PHP_EOL, '', $input);
    $heikin = trim(fgets(STDIN)); //40
    // var_dump($input);
    $i = round(($input[0] + $input[1]+ $input[2]+ $input[3]+ $input[4]+ $input[5]+ $input[6]) / 7 );

    if ($heikin <= $i) {
       echo "pass";
    } else {
        echo "failure";
    }
    
// -------------------------------














// -------------------------------
// -------------------------------
// -------------------------------
