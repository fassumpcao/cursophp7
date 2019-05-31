<?php

$data = array(
    "empresa"=>"FAssumpcao"

);

setcookie("NOME_COOKIE", json_encode($data), time() + 3600);

echo "OK";
 ?>
