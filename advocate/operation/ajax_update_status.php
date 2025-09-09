<?php

include '../../configuration/config.php';

if (isset($_POST['id'], $_POST['status'])) {
    $id = intval($_POST['id']);
    $status = $_POST['status'];

    $sql = "UPDATE cases SET status = '$status' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result){
        echo "success";
    }else{
        echo 'error';
    }

} else {
    echo "error";
}
