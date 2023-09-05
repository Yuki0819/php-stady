### 問題 6: 最小値の探索

- **要件**: 数値の配列を引数に取り、その最小値を返す関数`findMin`を定義してください。
<?php
$array = [471689,52657,5673,471297];
$findMin = findMin($array);
echo $findMin;

function findMin($array) {
    return min($array);
}

?>