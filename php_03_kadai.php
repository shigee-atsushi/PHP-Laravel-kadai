<?php
/*問1*/

$name = "shigee";

if ($name == "shigee") {
    echo "私は $name です。";
} else {
    echo "あなたの名前ではありません。";
}
echo "\n";

/*問2*/
$total = 0;

for ($i = 1; $i <=10000; $i++) {
    $total += $i;
}

echo $total;    //0.5*(10000)*(10000+1)=50005000になれば良い
echo "\n";

$fruits = [
    "lemon", "orange", "Water melon", "grape", "apple"
    ];

foreach ($fruits as $fruit){    
    echo "好きなフルーツは" . $fruit;
    echo "\n";
}

/*問4*/
$start = 1;
$end = 100;
 for ($i = $start; $i <= $end; $i++) {
     if (($i % 5) == 0) {
         echo $i;
         echo "\n";
     };
 }
 
 /*34行目，100まで繰り返すので<=に修正
 　35行目，ifの条件に括弧追加
 　36行目，;を追加
 　37行目，改行を追加
 　38行目，;を追加*/
?>