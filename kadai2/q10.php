10. 次のような二次元配列 `students` があります。各学生の名前とその成績リストを表示し、さらにその学生が全ての科目で「passed」だった場合は「{名前} is a top student!」と表示する PHP プログラムを作成してください。 `foreach` ループと `if` 文を使用してください。

php
$students = [
    "Alice" => ["Math" => "passed", "English" => "passed", "Science" => "passed"],
    "Bob" => ["Math" => "passed", "English" => "failed", "Science" => "passed"],
    "Charlie" => ["Math" => "failed", "English" => "passed", "Science" => "failed"],
];
<?php
$students = [
    "Alice" => ["Math" => "passed", "English" => "passed", "Science" => "passed"],
    "Bob" => ["Math" => "passed", "English" => "failed", "Science" => "passed"],
    "Charlie" => ["Math" => "failed", "English" => "passed", "Science" => "failed"],
];

foreach ($students as $name => $grades) {
    echo "$name's grades\n";
    foreach ($grades as $subject => $result) {
        echo "$subject: $result\n";
    }
    if (array_search("failed", $grades) === false) {
        echo "$name is a top student!\n";
    }
    echo "\n";
}
?>