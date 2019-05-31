<?php

//$file = fopen("log.txt", "w+"); //o w+ criara o arquivo.
$file = fopen("log.txt", "a+"); //o a+ incrementa a informacao no arquivo.

fwrite($file, date("Y-m-d H:i:s") . "\r\n");
fclose($file);

echo "Arquivo criado";

 ?>
