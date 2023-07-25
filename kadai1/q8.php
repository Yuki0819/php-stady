<!-- 問題 8（上級）:
年齢を表す変数 age があります。年齢が 18 歳以上かつ運転免許を持つ変数 hasDrivingLicense が true であれば、「You can drive.」、そうでなければ「You cannot drive.」と表示する PHP プログラムを作成してください。-->
<?php
$hasDrivingLicense = true; $age = 20;

if ($hasDrivingLicense and $age >= 18) {
    echo "You can drive.\n";
} else { 
    echo "You cannot drive.\n";
}
?>