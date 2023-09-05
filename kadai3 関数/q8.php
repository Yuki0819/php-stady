### 問題 8: 文字列の長さ

- **要件**: 文字列を引数に取り、その文字列の長さ（文字数）を返す関数`stringLength`を定義してください。PHP の組み込み関数`strlen`は使わないでください。
<?php
$string1 = stringLength("Hello");
echo $string1;

function stringLength($string) {
    return mb_strlen($string);
}

?>