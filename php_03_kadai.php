<?php
/*問1*/
$name = "shigee";

if ($name = "shigee") {
    echo "私は $name です。";
} else {
    echo "あなたの名前ではありません。";
}
echo "\n";

/*問2*/
$total = 0;

for ($i = 0; $i <=10000; $i++) {
    $total += $i;
}

echo $total;
echo "\n"
?>