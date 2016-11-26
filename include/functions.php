<?php
function compress_pic($source_url, $destination_url, $quality) {

	$info = getimagesize($source_url);

	if ($info['mime'] == 'image/jpeg')
		$image = imagecreatefromjpeg($source_url);

		elseif ($info['mime'] == 'image/gif')
		$image = imagecreatefromgif($source_url);

		elseif ($info['mime'] == 'image/png')
		$image = imagecreatefrompng($source_url);

		imagejpeg($image, $destination_url, $quality);
		return $destination_url;
}

/*// Not working
function resize_pic($source_url, $destination_url, $quality) {
	// The File
	$filename = $source_url;
	echo "Filename: $filename<br>";
	$percent = $quality;
	
	// Get new dimensions
	list($width, $height) = getimagesize($filename);
	$new_width = $width * $percent;
	$new_height = $height * $percent;
	
	// Resample
	$image_p = imagecreatetruecolor($new_width, $new_height);
	$destination_url = imagecreatefromjpeg($filename);
	imagecopyresampled($image_p, $destination_url, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
}
*/

// Create function to name pictures
?>
