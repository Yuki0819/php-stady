### 問題 7: 偶数と奇数

- **要件**: 整数を引数に取り、その数が偶数であれば"Even"、奇数であれば"Odd"という文字列を返す関数`evenOrOdd`を定義してください。
<?php
$a = evenOrOdd(2);
echo $a;

function evenOrOdd($a)
{
	if ($a % 2 == 0) {
		return 'even';
	} else {
		return 'odd';
	}
}

if (evenOrOdd(100) === 'even') {
	// 偶数の場合
}

if (evenOrOdd(100) === 'odd') {
	// 奇数の場合
}

?>