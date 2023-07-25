問題 5:
配列 numbers に 1 から 10000 までの数字を代入し、その合計を計算する PHP プログラムを作成してください。

配列と foreach を用いた問題:

<?php
$numbers = array();
for ($i = 1; $i < 10001; $i++) {
    $numbers[] = $i;
}
$num = 0;
foreach ($numbers as $number) {
    if($num += $number);
}
echo $num;


?>
