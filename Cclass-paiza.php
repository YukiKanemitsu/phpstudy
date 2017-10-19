<?php

// C013:嫌いな数字 -------------------------------

    $n = trim(fgets(STDIN));
    $count = trim(fgets(STDIN)); //3
    for ($i = 0; $i < $count; $i++) { //0,1,2
        $array[] = trim(fgets(STDIN));
        if (strpos($array[$i], $n, 0) === false) {
            echo $array[$i] . "\n";
        } elseif (strpos($array[$i], $n) !== false) {
            $kirai[] = "1";
           if (count($kirai) == $count) {
               echo "none";
           }
        }
    }

// C014:ボールが入る箱 -------------------------------

    $input = explode(" ", trim(fgets(STDIN)));
    $n = $input[0]; $r = $input[1]*2; //4,2  //n r　　　#箱の数n, ボールの半径r 表す整数
    $count = array();
    $array = array(0 => "0"); //初期化
    for ($i = 1; $i <= $n; $i++) { //1,2,3,4
        $array[] = explode(" ", trim(fgets(STDIN)));
        $h = $array[$i][0]; $w = $array[$i][1]; $d = $array[$i][2];
        if ($r <= $h && $r <= $w && $r <= $d) {
            $count[] = $i;
        }
    }
    foreach ($count as $value) {
        echo $value . "\n";
    }

// C015:ポイントカードの計算 -------------------------------

    $count = trim(fgets(STDIN)); //1
    $point = array();

    for ($i = 0; $i < $count; $i++) {
        $array = explode(" ", trim(fgets(STDIN)));
        if (strpos($array[0], "3") !== false) {
            $point[] =  floor($array[1] * 0.03);
        } elseif (strpos($array[0], "5") !== false) {
            $point[] = floor($array[1] * 0.05);
        } else {
            $point[] = floor($array[1] * 0.01);
        }
    }
    echo (array_sum($point));

// C016:Leet文字列 -------------------------------

    $input = trim(fgets(STDIN));
    $target = array("A", "E", "G", "I", "O", "S", "Z");
    $replace = array("4", "3", "6", "1", "0", "5", "2");
    $replaceText = str_replace($target, $replace, $input);
    echo $replaceText;


// C017:ハイアンドロー・カードゲーム -------------------------------

    $arr = explode(" ", trim(fgets(STDIN))); // 7 2
    $a = $arr[0]; //7
    $b = $arr[1]; //2
    $count = trim(fgets(STDIN)); //8;

    for ($i = 0; $i < $count; $i++) {
        $array = explode(" ", trim(fgets(STDIN)));
        if ($array[0] == $a && $array[1] > $b) {
            echo "High" . "\n";
        } elseif ($array[0] == $a && $array[1] < $b) {
            echo "Low" . "\n";
        } elseif ($array[0] < $a) {
            echo "High" . "\n";
        } else {
            echo "Low" . "\n";
        }
    }

// C020:残り物の量 -------------------------------

    $arr = explode(" ", trim(fgets(STDIN)));
    $m = $arr[0]  * 1000; //1000g
    $p = $arr[1] * 0.01; //
    $q = $arr[2] * 0.01;

    $noko = $m - ($m * $p);
    $nokori = $noko - ($noko * $q); //120g
    echo $nokori * 0.001;


// C021:暴風域にいますか？ -------------------------------

    //xc yc r_1 r_2
    //2つの円の中心の座標を (xc, yc)、半径をそれぞれ r_1, r_2 (r_1 < r_2) とします。
    //ある人の座標を (x, y) とすると、以下をみたすとき、ある人は台風の暴風域にいると定義します。
    $arr = explode(" ", trim(fgets(STDIN))); // 0 0 1 2
    $xc = $arr[0]; $yc = $arr[1]; $r_1 = $arr[2]; $r_2 = $arr[3];
    $r_1 = $r_1**2; $r_2 = $r_2**2;
    $count = trim(fgets(STDIN)); // 3

    for ($i = 0; $i < $count; $i++) {
        $line[] = explode(" ", trim(fgets(STDIN)));
        $x = ($line[$i][0] - $xc)**2;
        $y = ($line[$i][1] - $yc)**2;
        if (($r_1 < ($x + $y)) && (($x + $y) <= $r_2) == true){
         echo "yes" . "\n" ;
        } else {
            echo "no" . "\n" ;
        }
    }

// C022:ローソク足-------------------------------

    $count = trim(fgets(STDIN)); //4

    for ($i = 1; $i <= $count; $i++) {
        $line[] = explode(" ", trim(fgets(STDIN)));
    }
    echo $line[0][0] . " ";
    echo $line[$count-1][1] . " ";

    foreach ($line as $key => $value) {
        $arr[] = $value[2];
        $array[] = $value[3];
    }
    echo (max($arr)) . " ";
    echo (min($array));


// C023:クジの当選番号 -------------------------------

    $temochi = explode(" ", trim(fgets(STDIN))); //1 2 3 4 5 6
    $count = trim(fgets(STDIN)); //3

    for ($i = 0; $i < $count; $i++) { //0,1,2
        $line[] = explode(" ", trim(fgets(STDIN)));
          echo (count(array_intersect($temochi, $line[$i]))) . "\n";
    }

// C024:ミニ・コンピュータ -------------------------------

    $count = trim(fgets(STDIN)); //3
    $a = 0;
    $b = 0;
    for ($i = 0; $i < $count; $i++) {
        $array[] = explode(" ", trim(fgets(STDIN)));
        if ($array[$i][0] == "SET" && $array[$i][1] == "1") {
            $a = $array[$i][2];
        } elseif ($array[$i][0] == "SET" && $array[$i][1] == "2") {
            $b = $array[$i][2];
        } elseif ($array[$i][0] == "ADD") {
            $b = $a + $array[$i][1];
        } elseif ($array[$i][0] == "SUB") {
            $b = $a - $array[$i][1];
        }
    }
    echo $a ." " . $b;

// C028:単語テストの採点 -------------------------------

  //・正解の単語と完全一致→ ◯ 2 点
  // ・正解の単語と長さ(文字数)が異なる→ × 0 点
  // ・正解の単語と長さは同じだが 1 文字だけ異なる→ △ 1 点
  // ・正解の単語と長さは同じだが 2 文字以上異なる→ × 0 点
    $count = trim(fgets(STDIN)); //12
    $ten = array();
    for ($i = 0; $i < $count; $i++) { //0,1,2,3,4,5,6,7,8,9,10,11
        $line[] = explode(" ", trim(fgets(STDIN)));
        if ($line[$i][0] == $line[$i][1]) {
            $ten[] = 2;
        } elseif (strlen($line[$i][0]) !== strlen($line[$i][1]) ) {
            $ten[] = 0;
        } else {
            if ((levenshtein($line[$i][0], $line[$i][1])) == 1) {
               $ten[] = 1;
            }
        }
    }
    echo (array_sum($ten));


// C033:野球の審判 -------------------------------

    $count = trim(fgets(STDIN)); //5
    while ($line = fgets(STDIN)) {
       $array[] = trim($line);
    }

    for ($i = 0; $i < $count-1; $i++) { //0,1,2,3,4
        echo $array[$i] . "!" . "\n";
    }
    $values = array_count_values($array); //[ball]=>2; [strike]=>1;

    if ($array[$count-1] == "ball") { //$array[4] == "ball"
        if ($values["ball"] >= 3) {
            echo "fourball!";
        }
    }
    if ($array[$count-1] == "strike") {
        if ($values["strike"] >= 2) {
            echo "out!";
        }
    }


// C034:先生の宿題 -------------------------------

    $suu = explode(" ", trim(fgets(STDIN)));
    if ($suu[4] == "x") {
        if ($suu[1] == "+") {
            echo $suu[0] + $suu[2];
        } elseif ($suu[1] == "-") {
            echo $suu[0] - $suu[2];
        }
    } elseif ($suu[2] == "x") {
        if ($suu[1] == "+") {
            echo $suu[4] - $suu[0];
        } elseif ($suu[1] == "-") {
            echo $suu[0] - $suu[4];
        }
    } elseif ($suu[0] == "x") {
        if ($suu[1] == "+") {
            echo $suu[4] - $suu[2];
        } elseif ($suu[1] == "-") {
            echo $suu[4] + $suu[2];
        }
    }


// C035:試験の合格判定 -------------------------------

    $count = trim(fgets(STDIN)); //5
    $ten = array();
    for ($i = 0; $i < $count; $i++) { //0,1,2,3,4
        $line[] = explode(" ", trim(fgets(STDIN)));
        // var_dump($line);

        if (($line[$i][1]+ $line[$i][2] + $line[$i][3] + $line[$i][4] + $line[$i][5]) >= 350) {
            if ($line[$i][0] == "s" && ($line[$i][2] + $line[$i][3]) >= 160) { //理系
                $ten[] = 1;
            } elseif ($line[$i][0] == "l" && ($line[$i][4] + $line[$i][5]) >= 160) { //文系
                 $ten[] = 1;
            }
        }
    }
    echo (array_sum($ten));


// C039:古代の数式 -------------------------------

    $suu[] = explode("+", trim(fgets(STDIN))); // $suu=["<<///"],["<<<<////"],["///"];
    $count = count($suu); //2

    $su = array(); //初期化
    $ko = array(); //初期化
    for ($i = 0; $i < $count; $i++) { //0,1,2
        $su = str_replace("<", "", $suu[$i]); // $su=[///],[////],[///];
        $su = str_replace("/", "1", $su); // $su=[111],[1111],[111];
        $ko = str_replace("/", "", $suu[$i]); // $ko=[<<],[<<<<];
        $ko = str_replace("<", "0", $ko); // $ko=[00],[0000];
    }
    echo  ((strlen(implode("", $ko))) * 10) + (strlen(implode("", $su))); // (strlen(000000)*10) + strlen(1111111111);


// C040:【ロジサマコラボ問題】背比べ -------------------------------

    $count = trim(fgets(STDIN)); //3
    for ($i = 0; $i < $count; $i++) { //0,1,2
        $array[] = explode(" ", trim(fgets(STDIN)));
        if ($array[$i][0] == "le") {
            $le[] = $array[$i][1];
        } elseif ($array[$i][0] == "ge") {
            $ge[] = $array[$i][1];
        }
    }
    echo max($ge) . " " . min($le) ;


// C044:手の組み合わせ -------------------------------

    $count = trim(fgets(STDIN)); //4
    for ($i = 0; $i < $count; $i++) {// 0,1,2
        $line[] = trim(fgets(STDIN));
    }
    $kachi = (array_count_values($line));
    if ($kachi["paper"] >= 1 && $kachi["rock"] >= 1 && $kachi["scissors"] >= 1) {
        echo "draw";
    } elseif ($kachi["paper"] >= 1 && $kachi["rock"] >= 1) {
        echo "paper";
    } elseif ($kachi["rock"] >= 1 && $kachi["scissors"] >= 1) {
        echo "rock";
    } elseif ($kachi["scissors"] >= 1 && $kachi["paper"] >= 1) {
        echo "scissors";
    } elseif ($kachi["paper"] = $count || $kachi["rock"] = $count || $kachi["scissors"] = $count) {
        echo "draw";
    }


// -------------------------------
// -------------------------------
