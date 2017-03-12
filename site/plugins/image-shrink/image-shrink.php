<?php
// Shrink large images on upload
kirby()->hook('panel.file.upload', 'shrinkImage');
kirby()->hook('panel.file.replace', 'shrinkImage');
function shrinkImage($file)
{
	$maxDimension = c::get('ka.image.shrink.maxDimension', 1000);
	try {
		if ($file->type() == 'image' and ($file->width() > $maxDimension or $file->height() > $maxDimension)) {
			// Get original file path
			$originalPath = $file->dir() . '/' . $file->filename();
			// Create a thumb and get its path
			$resized = $file->resize($maxDimension, $maxDimension);
			$resizedPath = $resized->dir() . '/' . $resized->filename();
			// Replace the original file with the resized one
			copy($resizedPath, $originalPath);
			unlink($resizedPath);
		}
	} catch (Exception $e) {
		return response::error($e->getMessage());
	}
}