<?php 


function water_mark($meta, $id){

	if(!isset($meta['sizes'])) {
			return $meta;
	}   

	$upload_path = wp_upload_dir();     
	$path = $upload_path['basedir'];
	wp_die( print_r($path, true) );
	//handle the different media upload directory structures
	if(isset($path)){       
			$file = trailingslashit($upload_path['basedir'].'/').$meta['file'];
			$water_path = trailingslashit($upload_path['basedir'].'/').'watermark.png';
	}else{
			$file = trailingslashit($upload_path['path']).$meta['file'];
			$water_path = trailingslashit($upload_path['path']).'watermark.png';
	}

	//list original image dimensions
	list($orig_w, $orig_h, $orig_type) = @getimagesize($file);

	//load watermark - list its dimensions
	$watermark = imagecreatefrompng($water_path);
	list($wm_width, $wm_height, $wm_type) = @getimagesize($water_path); 
	//if your watermark is a transparent png uncomment below
	imagealphablending($watermark, 1);

	//load fullsize image
	$image = wp_load_image($file);
	//if your watermark is a transparent png uncomment below
	imagealphablending($image, 1);

	//greyscale image
	imagefilter($image, IMG_FILTER_GRAYSCALE);

	//create merged copy
	//if your watermark is a transparent png uncomment below
	imagecopy($image, $watermark, $orig_w - ($wm_width + 10), $orig_h - ($wm_height + 10), 0, 0, $wm_width, $wm_height);

	//if your watermark is a transparent png comment out below
	imagecopymerge($image, $watermark, $orig_w - ($wm_width + 10), $orig_h - ($wm_height + 10), 0, 0, $wm_width, $wm_height, 70);

	//save image backout
	switch ($orig_type) {
			case IMAGETYPE_GIF:
					imagegif($image, $file );
					break;
			case IMAGETYPE_PNG:
					imagepng($image, $file, 10 );
					break;
			case IMAGETYPE_JPEG:
					imagejpeg($image, $file, 95);
					break;
	}

	imagedestroy($watermark);
	imagedestroy($image);

	//return metadata info
	wp_update_attachment_metadata($id, $meta);
	return $meta;
}


function water_mark3($meta, $id){

	wp_update_attachment_metadata($id, $meta);
	wp_die( print_r($meta, true) );
	return $meta;
}



// Загрузка штампа и фото, для которого применяется водяной знак (называется штамп или печать)

// function water_mark2($meta, $id) {

// 	$upload_path = wp_upload_dir();     
// 	$path = $upload_path['url'] . '/a3.png';
// 	$watermark_img = $upload_path['url'] . '/watermark.png';
// 	// $stamp = imagecreatefrompng('stamp.png');
// 	// $im = imagecreatefromjpeg('photo.jpeg');
	
	
// 	$stamp = imagecreatefrompng($watermark_img);
// 	$im = imagecreatefrompng($path);
	
// 	// Установка полей для штампа и получение высоты/ширины штампа
// 	$marge_right = 10;
// 	$marge_bottom = 10;
// 	$sx = imagesx($stamp);
// 	$sy = imagesy($stamp);
	
	
// 	// Копирование изображения штампа на фотографию с помощью смещения края
// 	// и ширины фотографии для расчёта позиционирования штампа.
// 	imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
	
// 	//header('Content-type: image/png');
// 	imagepng($im);
// 	imagedestroy($im);

// 	wp_update_attachment_metadata($id, $meta);
// 	return $meta;
// }

 //add_filter('wp_generate_attachment_metadata','water_mark3', 10, 2);

 //apply_filters( 'water_mark3', 10, 2); // 6