<?php
/*問1*/
function sum($max) {
    $result = 2*$max;
    return $result;
}
echo sum(5);
echo "\n";

/*問2*/
function f($a, $b) {
    $result = $a + $b;
    return $result;
}
echo f(8, 9);
echo "\n";

/*問3*/
$arr = [1, 3, 5, 7, 9];
function ay($arr) {
    $result =  $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $result *= $arr[$i];
        }
    return $result;
}
 echo ay($arr);
 echo "\n";

/*問4*/
$arr = [600, 900, 400, 15000, 14000];
function max_array($arr) {
    $max_number = $arr[0];
    foreach ($arr as $ar) {
        if ($max_number < $ar) {
            $max_number = $ar;
        }
    }
    return $max_number;
}

echo max_array($arr);
echo "\n";

/*問5*/

/*1. strip_tags
    HTMLタグの部分を除去する*/
$string = '<a href="https://www.google.co.jp/">Google</a>';
$result = strip_tags($string);
echo $result;
echo "\n";

/*2. array_push
    配列の末尾にデータを追加*/
$array = ["a", "b", "c"];
array_push($array, "x", "y");
print_r($array);
echo "\n";

/*3. array-merge
    配列を結合する*/
$array = [1, 2, 3, 4];
$array_2 = [5, 6, 7, 8];
$true_array = array_merge($array, $array_2);
print_r($true_array);
echo "\n";

/*4. time
    unixのタイムスタンプで現時刻を表示する
    mktime
    指定時刻をunixタイムスタンプに変換する
    mktime(時間, 分, 秒, 月, 日, 年, サマータイム)*/
$now = time();
echo $now;
echo "\n";

$theday = mktime(23,57, 41, 6, 10, 2020);
echo $theday;
echo "\n";

/*5. date
    unixタイムスタンプを世界標準時間基準に戻す*/
$now = date('Y年m月d日H時i分s秒', time());
echo $now;
echo "\n";

$theday = date('Y年m月d日H時i分s秒', 1591833461);
echo $theday;
echo "\n";

?>