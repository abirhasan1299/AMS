<?php
include '../../configuration/config.php';
$sql = "DELETE FROM event WHERE id = {$_GET['id']}";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
if($result){
    header('location:../advocate_consultation-calendar.php');
}else{
    echo "Something went wrong...";
}

?>