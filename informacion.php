<?php

@$ip = qetenv (REMOTE_ADDR);

$navegador = $_SERVER ["HTTP USER AGENT"];

echo "Su IP es: ".$ip;

echo "<br>";

echo "Su navegador y sistema operativo son: ".$navegador;


?>