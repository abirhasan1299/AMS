<?php
include '../../configuration/config.php';

if (isset($_POST['id'])) {
    $case_id = intval($_POST['id']);

    // Fetch case details
    $stmt = $conn->prepare("SELECT * FROM cases WHERE id=?");
    $stmt->bind_param("i", $case_id);
    $stmt->execute();
    $case = $stmt->get_result()->fetch_assoc();

    if ($case) {
        echo "<h2 style='text-align: center;'>CR#{$case['code']}</h2>";
        echo "<h5 style='text-align: center;'>{$case['title']}</h5>";
        echo "<h5 style='text-align: center;'><strong>Client:</strong>{$case['client_name']}</h5>";
        echo "<p><strong>Status:</strong> {$case['status']}</p>";
        echo "<p><strong>Description:</strong> {$case['detail']}</p>";
        echo "<hr>";

        // Fetch uploaded files
        $files = mysqli_query($conn, "SELECT * FROM case_file WHERE case_id=$case_id");
        if (mysqli_num_rows($files) > 0) {
            echo "<h6>Attached Files:</h6><ul>";
            while ($file = mysqli_fetch_assoc($files)) {
                echo "<li><a href='../uploads/{$file['file_name']}' target='_blank' download>{$file['file_name']}</a></li>";
            }
            echo "</ul>";
        } else {
            echo "<p class='text-muted'>No files uploaded.</p>";
        }

        // Fetch uploaded files
        $files = mysqli_query($conn, "SELECT * FROM case_sub_document WHERE case_id=$case_id");
        if (mysqli_num_rows($files) > 0) {
            echo "<h6>Sub Document Files:</h6><ul>";
            while ($file = mysqli_fetch_assoc($files)) {
                echo "<li><a href='../uploads/{$file['file_name']}' target='_blank' download>{$file['file_name']}</a></li>";
                echo "<p><strong>Status:</strong> " . strtoupper($file['type']) . "</p>";
                echo "<p><strong>Notes :</strong> {$file['des']}</p>";
            }
            echo "</ul>";
        } else {
            echo "<p class='text-muted'>No Sub Docuemnt files uploaded.</p>";
        }

    } else {
        echo "<p class='text-danger'>Case not found.</p>";
    }
}
