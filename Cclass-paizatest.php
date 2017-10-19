<?php
// C019:完全数とほぼ完全数-------------------------------
//
// $count = trim(fgets(STDIN)); // 3
//
// for ($i = 0; $i < $count; $i++) {//0,1,2
//     $line[] = explode(" ", trim(fgets(STDIN)));
//     if ($line[$i][$i] / 6 || $line[$i][$i] == 28 || $line[$i][$i] == 496 ) {
//        echo "perfect" . "\n";
//     } elseif ($line[$i][$i] == 6-1 || $line[$i][$i] == 6+1 || $line[$i][$i] == 28+1 || $line[$i][$i] == 28-1 || $line[$i][$i] == 496+1 || $line[$i][$i] == 496-1 ) {
//        echo "nearly" . "\n";
//     } elseif ($line[$i][$i] != 6 || $line[$i][$i] != 28 || $line[$i][$i] != 496 ) {
//       echo "neither" . "\n";
//     }
// }
//
//
// array(1) { [0]=> string(2) "28" }
// array(1) { [0]=> string(2) "16" }
// array(1) { [0]=> string(3) "777" }
//
// array(3) {
// [0]=> array(1) { [0]=> string(2) "28" }
// [1]=> array(1) { [0]=> string(2) "16" }
// [2]=> array(1) { [0]=> string(3) "777" }
// }

// C010:安息の地を求めて-------------------------------

array(5) {
  [0]=> array(2) { [0]=> string(2) "25" [1]=> string(2) "10" }
  [1]=> array(2) { [0]=> string(2) "10" [1]=> string(2) "23" }
  [2]=> array(2) { [0]=> string(2) "20" [1]=> string(2) "15" }
  [3]=> array(2) { [0]=> string(2) "70" [1]=> string(2) "70" }
  [4]=> array(2) { [0]=> string(2) "10" [1]=> string(2) "30" }
}

$arr = explode(" ", trim(fgets(STDIN))); // 20 10 10
$a = $arr[0]; $b = $arr[1]; $R = $arr[2]*2; // $a=20; $b=10; $R=20;
$count = trim(fgets(STDIN)); // 5

for ($i = 0; $i < $count; $i++) {
    $line[] = explode(" ", trim(fgets(STDIN)));
    $x = $line[$i][0];
    $y = $line[$i][1];
    if (($line[$i][0] - $a)*2 + ($line[$i][1] - $b)*2 > $R){
        echo "silent" . "\n" ;
    } else {
        echo "noisy" . "\n" ;
    }
}

//60点だったのでやり直し
// C026:ウサギと人参 -------------------------------

    $input = explode(" ", trim(fgets(STDIN))); // 3 5 2
    $N = $input[0]; $S = $input[1]; $p = $input[2];
    $line = array(0 => 0);
    $count = array();
    for ($i = 1; $i <= $N; $i++) { // 0,1,2,
        $line[] = explode(" ", trim(fgets(STDIN)));
        if (($S + $p) > $line[$i][1] && $S - $p < $line[$i][1] ) { //7 > 8 && 3 < 8;
            $count = array($i => $line[$i]); // [1] => [0]8 [1]10; [2] => [0]7 [1]6;
            if ($count[$i][0] <= $count[$i+1][0]) {
                $array[] = $i+1;
            } else {
                $array[] = $i;
            }
        }
    }
    if (!$array) {
        echo "not found";
    } else {
       echo(min($array));
    }


//60点だったのでやり直し
// C036:[もし女コラボ問題]犬ぞりトーナメント -------------------------------

    $_1 = explode(" ", trim(fgets(STDIN))); // 1,3
    $san1 = $_1[0]; $san2 = $_1[1];  // 1,3
    $_2 = explode(" ", trim(fgets(STDIN))); // 2,4
    $ka1 = $_2[0]; $ka2 = $_2[1]; // 2,4

    $t_1 = explode(" ", trim(fgets(STDIN))); // 988 876 921 906
    $t_2 = explode(" ", trim(fgets(STDIN)));// 866 911

    if ($t_1[$san1-1] < $t_1[$san2-1]) { // 988 < 921
        $tor = $san1;
    } else {
        $tor = $san2; //3
    }
    if ($t_1[$ka1-1] < $t_1[$ka2-1]) { // 876 < 906
        $tor2 = $ka1; //2
    } else {
        $tor2 = $ka2;
    }

    if ($t_2[0] > $t_2[1]) { // 866 > 911 //2 vs 3
        echo $tor . "\n" . $tor2 . "\n";
    } else {
        echo $tor2 . "\n" . $tor . "\n";
    }


// C037:アニメの日時 -------------------------------
$arr = explode(" ", trim(fgets(STDIN)));
$l = explode("/", $arr[0]);   $r = explode(":", $arr[1]);
$month = $l[0]; $minits = $r[1];
$day = $l[1];   $hour = $r[0];
if ($hour >= 96) {
    $hour = $hour -96;
    $day = $day +4;
}
if ($hour >= 72) {
    $hour = $hour -72;
    $day = $day +3;
} elseif ($hour >= 48) {
    $hour = $hour -48;
    $day = $day +2;
}
elseif ($hour >= 24) {
    $hour = $hour -24;
    $day = $day +1;
} if ($hour == 0) {
    $hour = "00";
} elseif ($hour <= 9) {
    $hour = "0" . $hour;
}
echo $month . "/" . $day . " " . $hour . ":" . $minits;

array(2) {
[0]=>
string(2) "01"
[1]=>
string(2) "27"
}
array(2) {
[0]=>
string(2) "24"
[1]=>
string(2) "30"
}

// C042:リーグ表の作成 -------------------------------

    $n = trim(fgets(STDIN));//3
    $array = array();
    $board[] = array(0 => " ");
    $W = array(); $L = array();

    for ($i = 1; $i <= $n; $i++) { //0,1,2,
        $array[$i] = explode(" ", trim(fgets(STDIN)));
        $W[] = $array[$i][0]; //1,2,2
        $L[] = $array[$i][1]; //3,1,3
        $board[$i][$i] = "-";
        $board[$W][$L] = "W";
        $board[$L][$W] = "L";

        var_dump($board);
    }
    // $board = array($W, $L, $i);
    // $board[$i][$i] = "-";
    // $board[$i][$W] = "W";
    // $board[$i][$L] = "L";
    // if ($W == $i) {
    //     $board
    // }
    var_dump($board);
    }

    foreach ($board as $key => $value) {
      print_r($value]);
    }

    array(3) {
      [0]=>
      array(1) {[1]=>string(1) "-"}
      [1]=>
      array(1) {[2]=>string(1) "-"}
      [2]=>
      array(1) {[3]=>string(1) "-"}
    }

// -------------------------------
























// -------------------------------
// -------------------------------
// -------------------------------
// -------------------------------
// -------------------------------
// -------------------------------
// -------------------------------
