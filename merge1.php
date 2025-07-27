<?php

// Path to the uploads directory
$uploadsDir = __DIR__ . '/uploads';

// Supported image types
$supportedTypes = ['jpg', 'jpeg', 'png'];

// Initialize an array to store image resources
$imageResources = [];

// Iterate over files in the uploads directory
foreach (new DirectoryIterator($uploadsDir) as $file) {
    if ($file->isDot()) {
        continue;
    }

    // Get file extension and check if it's a supported image type
    $fileExtension = strtolower(pathinfo($file->getFilename(), PATHINFO_EXTENSION));
    if (in_array($fileExtension, $supportedTypes)) {
        $filePath = $file->getPathname();

        // Create image resource based on file type
        $imageResource = false;
        switch ($fileExtension) {
            case 'jpg':
            case 'jpeg':
                $imageResource = imagecreatefromjpeg($filePath);
                break;
            case 'png':
                $imageResource = imagecreatefrompng($filePath);
                break;
        }

        // If image resource creation was successful, add it to the array
        if ($imageResource !== false) {
            $imageResources[] = $imageResource;
        }
    }
}

// Check if any valid image resources were loaded
if (count($imageResources) === 0) {
    die("No valid images found in the uploads directory.");
}

// Get dimensions of the first image (assuming all images are the same size)
$width = imagesx($imageResources[0]);
$height = imagesy($imageResources[0]);

// Calculate dimensions for the merged image
$mergedWidth = $width;
$mergedHeight = $height * count($imageResources);

// Create a new true color image with transparency support
$mergedImage = imagecreatetruecolor($mergedWidth, $mergedHeight);

// Enable transparency support for PNG images
imagesavealpha($mergedImage, true);
$transparent = imagecolorallocatealpha($mergedImage, 0, 0, 0, 127);
imagefill($mergedImage, 0, 0, $transparent);

// Copy each image onto the merged image, stacking them vertically
for ($i = 0; $i < count($imageResources); $i++) {
    $imageResource = $imageResources[$i];
    imagecopy($mergedImage, $imageResource, 0, $i * $height, 0, 0, $width, $height);
}

// Output the merged image to the browser
header('Content-Type: image/png');
imagepng($mergedImage);

// Free up memory
foreach ($imageResources as $resource) {
    imagedestroy($resource);
}
imagedestroy($mergedImage);

?>
