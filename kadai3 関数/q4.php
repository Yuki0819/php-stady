### 問題 4: 配列の合計

- **要件**: 数値の配列を引数に取り、その要素の合計を返す関数`arraySum`を定義してください。
<?php
$array = [2,4,6,8];

$result = arraySum($array);
echo $result;

function arraySum($array) {
    return array_sum($array);
}
?>