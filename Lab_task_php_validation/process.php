<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Validate username
    if (empty($_POST["username"])) {
        $errors[] = "Please enter your name.";
    } elseif (!preg_match("/^[a-zA-Z0-9 ]*$/", $_POST["username"])) {
        $errors[] = "User name can only contain letters, numbers, and spaces.";
    }

    // Validate date of birth
    if (empty($_POST["dob"])) {
        $errors[] = "Please enter your date of birth.";
    } else {
        $dob = strtotime($_POST["dob"]);
        if (!$dob) {
            $errors[] = "Invalid date format.";
        }
    }

    // Validate workplace
    if (empty($_POST["workplace"])) {
        $errors[] = "Please write your workplace.";
    }

    // Validate blood group
    $validBloodGroups = ["A+", "A-", "B+", "B-", "O+", "O-", "AB+", "AB-"];
    if (empty($_POST["bloodgroup"])) {
        $errors[] = "Please select a blood group.";
    } elseif (!in_array($_POST["bloodgroup"], $validBloodGroups)) {
        $errors[] = "Invalid blood group selection.";
    }

    // Validate image upload
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $allowedExtensions = ["jpg", "jpeg", "png", "gif"];
        $fileExtension = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));

        if (!in_array($fileExtension, $allowedExtensions)) {
            $errors[] = "Invalid image format. Only JPG, JPEG, PNG, and GIF files are allowed.";
        }

        if ($_FILES["image"]["size"] > 2 * 1024 * 1024) { // 2MB limit
            $errors[] = "Image size should not exceed 2MB.";
        }
    } else {
        $errors[] = "Please upload an image.";
    }

    // Display errors or success message
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        echo "<p style='color:green;'>Form submitted successfully!</p>";
        // Process the valid data (e.g., store it in the database)
    }
}
?>