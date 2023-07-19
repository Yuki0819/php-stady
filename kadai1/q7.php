<!-- 問題 7（中級）:
二つの変数 num1 と num2 があります。もし num1 が num2 の倍数であれば、「num1 is a multiple of num2」を表示し、そうでなければ、「num1 is not a multiple of num2」を表示する PHP プログラムを作成してください。-->
<?php
$num1 = 90; $num2 = 10;

if ($num1 % $num2 == 0) {
    echo "num1 is a multiple of num2\n";
} else {
    echo "num1 is not a multiple of num2\n";
}
?>