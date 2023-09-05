### 問題 9: 素数判定

- **要件**: 整数を引数に取り、その数が素数であれば`true`、それ以外であれば`false`を返す関数`isPrime`を定義してください。
<?php  
function isPrime($target) {
    $isPrime = true;
    for($i=2;$i<$target;$i++) {
      if($target%$i == 0) {
        $isPrime = false;
        break;
      }
    }
    
    return $isPrime;
}

$isPrime = isPrime(97);
echo $isPrime;


// if ($isPrime) {
//   echo $target. "は素数です。";
// } else {
//   echo $target. "は素数ではありません。";
// }
?>