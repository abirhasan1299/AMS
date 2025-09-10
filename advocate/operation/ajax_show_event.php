<?php
include '../../configuration/config.php';

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

   $sql = "SELECT * FROM event WHERE id=$id";
   $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
   $row = mysqli_fetch_array($result);

    if ($row) {
        echo "<h5 style='text-align: center;'>{$row['title']}</h5>";
        echo "<p style='text-align: center;'><strong>Event Type:</strong> {$row['type']}</p>";
        echo "<p style='text-align: center;'><strong>Date:</strong> {$row['date']}</p>";
        echo "<p style='text-align: center;'><strong>Time:</strong> {$row['time']}</p>";
        echo "<p style='text-align: center;'><strong>Venue:</strong> {$row['venue']}</p>";

    } else {
        echo "<p class='text-danger'>Case not found.</p>";
    }
}
