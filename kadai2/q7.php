問題 7:
次のような配列 fruits を作成し、ループを使用して各フルーツとそのフルーツが配列の何番目に入っているかを表示する PHP プログラムを作成してください。


$fruits = ["Apple", "Banana", "Cherry", "Date", "Elderberry"];


出力イメージ
php
0 Apple
1 Banana
2 Cherry
.
.
.

<?php
$fruits = ["Apple", "Banana", "Cherry", "Date", "Elderberry"];

foreach ($fruits as $number => $fruit) {
    echo "$number $fruit\n";    
}
?>
