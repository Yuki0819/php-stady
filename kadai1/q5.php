<!-- 問題 5（初級）:
年齢を表す変数 age があります。年齢が 20 歳以上かつ 65 歳以下なら「You are an adult.」、それ以外の場合は「You are not an adult.」と表示する PHP プログラムを作成してください。-->
<?php
$num = 55;

if ($num >= 20 && $num <= 65) {
    echo "You are an adult.\n";
} else {
    echo "You are not an adult.\n";
}

?>