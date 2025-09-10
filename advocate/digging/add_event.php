<?php
if(isset($_POST['submit'])){
    include '../configuration/config.php';
    $title = $_POST['title'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $type = $_POST['type'];
    $venue = $_POST['venue'];
    $user_id = $_SESSION['id'];

    $sql  = "INSERT INTO event(title,date,time,type,venue,user_id) VALUE ('$title','$date','$time','$type','$venue','$user_id')";

    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if($result){
        echo '<div class="alert alert-success" role="alert">
  Add Event Successful!
</div>';
    }else{
        echo '<div class="alert alert-danger" role="alert">
  Something went wrong!
</div>';
    }
}

?>