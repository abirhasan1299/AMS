<?php
include '../../configuration/config.php';
$sql = "DELETE FROM cases WHERE id = '$_GET[id]'";
$result = mysqli_query($conn, $sql);
header('Location:../admin_view_all_cases.php');