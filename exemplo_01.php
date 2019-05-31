<?php

$name = "images";

if(!is_dir($name)){
    mkdir($name);
    echo "Diretorio $name criado.";
} else {
    rmdir($name);
    echo "O diretorio $name foi removido";
}
 ?>
