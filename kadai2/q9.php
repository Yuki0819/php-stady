問題 9:
0 から 1000 までに存在する 10 の倍数の数字をすべて表示する二重ループを作ってください
<?php 
for ($i = 0; $i <= 1000; $i+=10) {
    for ($j = 0; $j <= 1000; $j+=10) {
     echo $i . "\n";
     echo $j . "\n";
    }
 }
    ?>