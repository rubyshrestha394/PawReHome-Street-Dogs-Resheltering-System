<?php
// Database connection
include('server/connection.php'); // update this path if needed

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize input
    $name = htmlspecialchars(trim($_POST['reporter_name']));
    $location = htmlspecialchars(trim($_POST['location']));
    $description = htmlspecialchars(trim($_POST['description']));
    $photoPath = NULL;

    // Handle file upload if photo was provided
    if (!empty($_FILES['photo']['name'])) {
        $targetDir = "uploads/"; // Make sure this folder exists and is writable
        $fileName = basename($_FILES["photo"]["name"]);
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($fileType, $allowedTypes)) {
            $newFileName = uniqid("dog_") . '.' . $fileType;
            $targetFilePath = $targetDir . $newFileName;

            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath)) {
                $photoPath = $targetFilePath;
            } else {
                die("Error uploading image.");
            }
        } else {
            die("Only JPG, JPEG, PNG, and GIF files are allowed.");
        }
    }

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO street_dog_reports (reporter_name, location, description, photo_path) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $location, $description, $photoPath);

    if ($stmt->execute()) {
        echo "<script>alert('Report submitted successfully!'); window.location.href='dogsightingform.html';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "Invalid access.";
}
?>
