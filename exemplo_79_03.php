<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);
//echo  __DIR__ . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf";
imagettftext($image, 32, 0, 320, 150, $titleColor, __DIR__ . DIRECTORY_SEPARATOR ."fonts" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 370, 350, $titleColor, __DIR__ . DIRECTORY_SEPARATOR. "fonts" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", utf8_decode("Felipe Assumpção"));
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");
//imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg"); //Gera em arquivo
imagejpeg($image); //Gera na tela
imagedestroy($image);
?>
