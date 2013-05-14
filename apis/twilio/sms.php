<?php

$stringData = print_r($_POST);

mail("sacha.corazzi@gmail.com","Text",$stringData);
