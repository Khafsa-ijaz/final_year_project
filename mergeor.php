<?php
// Database connection parameters
include('connection.php');

// Prepare and execute the SQL query to fetch images
$sql = "SELECT file FROM files ";
$result = mysqli_query($conn, $sql);

// Check if any images were retrieved
if (mysqli_num_rows($result) == 0) {
    die("Error: No images found in the database.");
}

// Create an array to store image resources
$imageResources = [];

// Loop through the results and create image resources
while ($row = mysqli_fetch_assoc($result)) {
    $imageData = $row['/uploads/'];

    // Detect image type and create image resource
    $imageResource = imagecreatefromstring($imageData);

    // Check if image resource was created successfully
    if ($imageResource) {
        $imageResources[] = $imageResource;
    } else {
        die("Error: Unsupported image data found.");
    }
}

// Ensure there is at least one image resource
if (count($imageResources) == 0) {
    die("Error: No valid images to process.");
}

// Get the width and height of the first image (assuming all images have the same dimensions)
$width = imagesx($imageResources[0]);
$height = imagesy($imageResources[0]);

// Calculate the dimensions for the merged image
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

// Close the database connection
mysqli_close($conn);
?>
