問題 2:
for ループを使用して、1 から 50 までの偶数をすべて表示する PHP プログラムを作成してください。
<?php
for ($i = 1; $i < 51; $i++) {
    if ($i % 2 == 0)
    echo "$i\n";
}
?>