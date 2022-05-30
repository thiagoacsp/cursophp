<?php 
$separador = DIRECTORY_SEPARATOR;
$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);

$gray = imagecolorallocate($image, 100, 100, 100);
$fontBevan = __DIR__ . $separador ."fonts".$separador."Bevan".$separador."Bevan-Regular.ttf";
$fontPlayball = __DIR__ . $separador ."fonts".$separador."Playball".$separador."Playball-Regular.ttf";
imagettftext($image, 32, 0, 320, 250, $titleColor, $fontBevan, "CERTIFICADO");
imagettftext($image, 32, 0, 370, 350, $titleColor, $fontPlayball, "Divanei Aparecido");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

//Mostra a imagem na tela
imagejpeg($image);
//Gera o arquivo na pasta
//imagejpeg($image, "certificado-" . date("y-m-d") . ".jpeg", 10);

imagedestroy($image);

?>