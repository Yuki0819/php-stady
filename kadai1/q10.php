<!-- 問題 10（上級）:
変数 grade（成績）があります。grade が 90 以上なら「You got an A」、80 以上 90 未満なら「You got a B」、70 以上 80 未満なら「You got a C」、60 以上 70 未満なら「You got a D」、それ以外の場合は「You got an F」と表示する PHP プログラムを作成してください。-->
<?php
$var = 80

if ($var >= 90) {
echo "You got an A\n";
}elseif ($var >= 80 && < 90) {
    echo "You got a B\n";
}elseif ($var >= 70 && < 80) {
    echo "You got a B\n";
}elseif ($var >= 60 && < 70) {
    echo "You got a D\n"; 
} else {
    echo "You got an F\n";
}

?>