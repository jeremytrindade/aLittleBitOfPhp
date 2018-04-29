<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);

$gray = imagecolorallocate($image,100,100,100);

imagettftext($image, 32, 0,450, 150, $titleColor,"fonts/Bevan/Bevan-Regular.ttf", "CERTIFICADO");

imagettftext($image, 32, 0,440, 350, $titleColor, "Divanei Aprecido");

imagettftext($image, 32, 0,440, 370, $titleColor,"fonts/Playball/Playball-Regular.ttf", utf8_decode("Concluído em: ").date("d/m/Y"));

//header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>