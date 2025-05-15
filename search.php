<?php
// 搜尋資料夾找出含指定文字的HTML

$files = scandir('content');
foreach ($files as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) === "html") {
        $text = strip_tags(file_get_contents("content/$file"));
        if (str_contains($text, '小火龍')) {
            echo $text;
        }
    }
}