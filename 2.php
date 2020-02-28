<?php

$im_php = imagecreatefrompng('images/1.png');


$im_php = imagescale($im_php, 200, 100);
header("Content-type: image/png");
imagepng($im_php);

// free memory
imagedestroy($im_php);
