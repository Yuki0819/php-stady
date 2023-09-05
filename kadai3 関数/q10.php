### 問題 10: 配列の結合

- **要件**: 2 つの文字列の配列を引数に取り、それらを結合した新しい配列を返す関数`concatArrays`を定義してください。
<?php
    $fruit1 = ["apple", "banana"];
    $fruit2 = ["cherry", "date"];

    $fruits_merge = array_merge($fruit1,$fruit2);
    print_r($fruits_merge);

    function concatArrays($fruits) {
        return $fruits;
}

?>