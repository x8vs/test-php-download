<?php

$inner = "http://example.com$$http://example.com/payload.php";

// 双重 base64
$encoded = base64_encode(base64_encode($inner));

// 加 5 位前缀 + 5 位后缀（随便字符，用于模拟混淆）
echo "AAAAA" . $encoded . "BBBBB";
