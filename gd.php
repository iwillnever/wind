<?php
session_start();
$code_length = rand(3,5);
$pelnum = rand(100,150);
$image_args = [
	'width' => 60,
	'height' => 25
];
$str = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
for($i = 0 ; $i < $code_length; $i++){
	$code .= $str[rand(0,51)];
}
$image = imagecreate($image_args['width'], $image_args['height']);
$background = imagecolorallocate($image, 221, 160, 221);
$fontcolor = imagecolorallocate($image, 199,21,133);
$red = imagecolorallocate($image, 176, 224, 230);
for ($i=0; $i < $pelnum; $i++){ 
			imagesetpixel(
					$image, 
					rand(0,$image_args['width']), 
					rand(0,$image_args['height']), 
					$red
				);
}
imagestring($image, 5, 10, 4, $code, $fontcolor);
$image=imagerotate($image,10,0);
ob_clean();
//header('Cache-Control: private, max-age=0, no-store, no-cache, must-revalidate');
//header('Cache-Control: post-check=0, pre-check=0', false);		
//header('Pragma: no-cache');
header("content-type: image/png");
$_SESSION['checked'] = strtolower($code);
imagepng($image);
imagedestroy($image);
?>
