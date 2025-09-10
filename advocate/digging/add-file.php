<?php
include '../configuration/config.php';

if (isset($_POST['submit'])) {
    $case_id = mysqli_real_escape_string($conn, $_POST['case_id']);
    $case_type = mysqli_real_escape_string($conn, $_POST['case_type']);
    $description = mysqli_real_escape_string($conn, $_POST['des']);

    // File upload details
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $upload_dir = "../uploads/";

    // Create folder if it doesn't exist
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Make file name unique to avoid overwriting
    $unique_name = time() . "_" . basename($file_name);
    $target_file = $upload_dir . $unique_name;

    // Validate allowed file types
    $allowed_types = ['pdf', 'doc', 'docx', 'jpg', 'png'];
    $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    if (in_array($ext, $allowed_types)) {
        if (move_uploaded_file($file_tmp, $target_file)) {
            // Insert into DB
            $stmt = "INSERT INTO case_sub_document(case_id,type, file_name, des) VALUE ('$case_id', '$case_type', '$file_name', '$description')";


            if (mysqli_query($conn, $stmt)) {
                echo "<script>alert('নথি সফলভাবে আপলোড হয়েছে'); </script>";
            } else {
                echo "<script>alert('Database insert error');</script>";
            }
        } else {
            echo "<script>alert('File upload failed');</script>";
        }
    } else {
        echo "<script>alert('Invalid file type. Allowed: PDF, DOCX, JPG, PNG');</script>";
    }
}


?>