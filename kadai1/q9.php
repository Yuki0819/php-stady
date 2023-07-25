<!-- 問題 9（上級）:
2 つの変数 temp（温度）と isRaining（雨が降っているか）があります。もし温度が 0 度以下で雨が降っている場合は「It may snow.」、そうでなければ「It is unlikely to snow.」と表示する PHP プログラムを作成してください。-->
<?php
$temp = -1; $var = "isRaining";

if ($temp >= 0 && $var) {
    echo "It is unlikely to snow.\n";
} else {
    echo "It may snow.\n";
}

?>