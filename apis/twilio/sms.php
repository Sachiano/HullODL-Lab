<?php

ob_start(); 
print_r($_POST); 
$stringData = $_POST['Body'];

mail("sacha.corazzi@gmail.com","Text",$stringData);
