問題 8:
$pets という名前の配列があり、その中にはいくつかのペットの名前が入っています。foreach ループを使用して、各ペットの名前の長さ（文字数）を表示する PHP プログラムを作成してください。

php
$pets = ["Dog", "Cat", "Rabbit", "Hamster", "Bird"];

<?php
$pets = ["Dog", "Cat", "Rabbit", "Hamster", "Bird"];

foreach ($pets as $pet) {
    $word = strlen($pet);
    echo $pet . "の名前の長さは" . $word . "文字です";
    echo "<br>";
}

?>
