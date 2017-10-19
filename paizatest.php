<?php

    //20点止まりだったのでやり直し
    //D040:連休の天気
    // while ($line = fgets(STDIN)) {
    //     $tmp[] = trim($line);
    // }
    //
    // $count = 0;
    // for ($i = 1; $i <= 7; $i++) {
    //
    //     if ($tmp[$i] < 31) {
    //     $count += 1;
    //     }
    // }
    // echo $count;


    //9点止まりだったのでやり直し
    // //D062:ひな祭り
    // $input = fgets(STDIN);
    // $count = explode(" ", $input);
    // $count = str_replace(PHP_EOL, '', $count);
    //
    // $_1 = $count[0]; //2
    // $_2 = $count[1]; //3
    // $_8 = $count[2]; //5
    //
    // $array = array("0", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J");
    //             //  0    1    2    3    4    5    6    7    8    9    10
    //
    // print_r($array);
    // for ($i = 0; $i < $_1; $i++) {
    //      // code...
    //    echo $array[$i+1];
    // }

    
    //90点止まりだったのでやり直し
    //D063:お花見の場所取り
    // $input = fgets(STDIN);
    // // 取得した入力値を半角スペースで分解します
    // $array = explode(" ", $input);  //"0 10 23 35 57"
    // $array = str_replace(PHP_EOL, '', $array);
    //
    // $me = trim(fgets(STDIN));
    //
    // if ($array[0] > $me) {
    //     echo "1";
    // } elseif ($array[1] > $me) {
    //     echo "2";
    // } elseif ($array[2] > $me) {
    //     echo "3";
    // } elseif ($array[3] > $me) {
    //     echo "4";
    // } elseif ($array[4] > $me) {
    //     echo "5";
    // }


    //80点止まりだったのでやり直し
    // D069:割り切れない平均点-------------------------------
    // $input = fgets(STDIN);
    // $array = str_replace(PHP_EOL, '', $input);
    // $array = explode(" ", $array);
    // $num = array_sum($array);//410
    // $num = round($num / 7 , 1);
    //
    // if ((substr($num, -1)) == 0) {
    //     echo $num . ".0";
    // } else {
    //     echo $num;
    // }


    //80点止まりだったのでやり直し
    //D071:洗濯物と砂ぼこり
    // $input = fgets(STDIN);
    // $array = explode(" ", $input);
    // //改行コード削除
    // $array = str_replace(PHP_EOL, '', $array);
    // // var_dump($array);
    // $t = $array[0]; //25 気温
    // $m = $array[1]; //50 湿度
    //
    // if ($t >= 25 && $m <= 40) { //気温が 25 ℃以上かつ、湿度 40 % 以下の日は砂ぼこりが舞うので干しません。
    //     echo "No";
    // } if ($t >= 25 || $m <= 40) { //気温が 25 ℃以上の日、もしくは湿度が 40 % 以下の日は干します。
    //     echo "Yes";
    // } elseif($t < 25 || $m > 40) {
    //     echo "No";
    // }





//
