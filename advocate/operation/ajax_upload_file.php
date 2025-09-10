<?php
include '../../configuration/config.php';

if (isset($_POST['upload'])) {
    $case_id = $_POST['case_id'];

    // File info
    $file_name = $_FILES['case_file']['name'];
    $file_tmp  = $_FILES['case_file']['tmp_name'];
    $upload_dir = "../../uploads/";

    // Create folder if not exists
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Move file to folder
    $target_file = $upload_dir . basename($file_name);
    if (move_uploaded_file($file_tmp, $target_file)) {
        // Save record in DB
        $stmt = "INSERT INTO case_file(case_id, file_name, file_path) VALUE('$case_id', '$file_name', '$target_file')";

        if (mysqli_query($conn, $stmt)) {
            echo "<script>alert('File uploaded successfully'); </script>";
            header('location:../advocate_case-management.php');
        } else {
            echo "<script>alert('Database error'); </script>";
            header('location:../advocate_case-management.php');
        }
    } else {
        echo "<script>alert('File upload failed');</script>";
    }
}
