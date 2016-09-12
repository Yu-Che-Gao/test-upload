<?php
    $im = imagecreatetruecolor(120, 20);
    $text_color = imagecolorallocate($im, 233, 14, 91);
    imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);
    imagejpeg($im, 'upload.jpg', 100);
    imagedestroy($im);
    exec('./saliva_analyzer_linux.out test_image.jpg 100 300 25', $outputResult);
    $whitePixels=$outputResult[0];
    echo $whitePixels;
?>