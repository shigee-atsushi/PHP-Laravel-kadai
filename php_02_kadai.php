<?php
/*問1.*/
$a = 3;
$b = 7;
echo $a + $b;
echo "\n";

/*問2*/
$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
echo $array_month[7];
echo "\n";

/*問3*/
$hello = "Hello, ";
$name = "Shigee";
$world = "'s World!";
echo $hello . $name . $world;
echo "\n";

/*問4*/
$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;
echo "\n";

/*問5*/
$calender_2018 = [
    "January" => "1月",
    "February" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "July" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "November" => "11月",
    "December" => "12月"
];

echo $calender_2018["December"];
/*27行目，変数の文字修正と配列の括弧を修正
  29行目，2月の後のコンマを修正
  37行目，ダブルクォーテーションの追加
  42行目，配列内のダブルクォーテーションの追加*/
echo "\n";
?>