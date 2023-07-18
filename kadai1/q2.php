<!-- 問題 2（初級）:
二つの変数 num1 と num2 があります。num1 が num2 より大きい場合は「num1 is greater than num2」、小さい場合は「num1 is less than num2」、等しい場合は「num1 is equal to num2」と表示する PHP プログラムを作成してください。-->
<?php
$num1 = 2; $num2 = 1;
if ($num1 > $num2)
echo "num1 is greater than num2\n";
$num1 = 1; $num2 = 2;
if ($num1 < $num2)
echo "num1 is less than num2\n";
$num1 = 1; $num2 = 1;
if ($num1 == $num2)
echo "num1 is equal to num2\n"
?>