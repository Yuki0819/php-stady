<!-- 問題 9（上級）:
2 つの変数 temp（温度）と isRaining（雨が降っているか）があります。もし温度が 0 度以下で雨が降っている場合は「It may snow.」、そうでなければ「It is unlikely to snow.」と表示する PHP プログラムを作成してください。-->
<?php
$num = 0; $var = "isRaining";

if ($num >= 0 && $var) {
    echo "It may snow.\n";
} else {
    echo "It is unlikely to snow.\n";
}

?>