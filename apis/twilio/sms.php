<?php

ob_start(); 
print_r($_POST); 
$stringData = ob_get_flush();

mail("sacha.corazzi@gmail.com","Text",$stringData);
