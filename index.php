<?php
// simple router
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($path === '/'){
    echo '<a href="/loading">載入資料頁</a><br><a href="/search">搜尋頁</a>';
} elseif ($path === '/loading') {
    include 'loading.html';
} elseif ($path === '/search') {
    include 'search.php';
} else echo '404';
