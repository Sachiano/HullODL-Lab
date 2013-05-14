<?php
$myFile = "testFile.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = print_r($_POST);
fwrite($fh, $stringData);
fclose($fh);