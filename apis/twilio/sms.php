<?php
$myFile = "testFile.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = $_POST;
fwrite($fh, $stringData);
fclose($fh);