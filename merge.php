<?php

// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "csit";   // Replace with your database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// The ID for which you want to fetch images
$id =$_GET['id']; // Replace this with the dynamic ID you want to use

// Fetch image filenames associated with the ID from the database
$sql = "SELECT file FROM files WHERE reg_no = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();


// Initialize an array to store image resources
$imageResources = [];
$supportedTypes = ['jpg', 'jpeg', 'png'];

// Directory where images are stored
$uploadsDir = __DIR__ . '/uploads/';

// Loop through the results and create image resources
while ($row = $result->fetch_assoc()) {
    $fileName = $row['file'];
    $filePath = $uploadsDir . $fileName;
    $fileExtension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));

    if (file_exists($filePath) && in_array($fileExtension, $supportedTypes)) {
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
    die("No valid images found for the given ID.");
}

// Get dimensions of the first image (assuming all images have the same size)
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

// Close the database connection
$conn->close();
?>
