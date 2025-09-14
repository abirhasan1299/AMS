<?php
if(isset($_POST['submit'])){
    include '../configuration/config.php';
    $title = $_POST['title'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $type = $_POST['type'];
    $venue = $_POST['venue'];
    $user_id = $_SESSION['id'];

    $check_already_has_sql = "SELECT * FROM event WHERE date = '$date' AND time ='$time'";
    $res = mysqli_query($conn, $check_already_has_sql) or die(mysqli_error($conn));
    if(mysqli_num_rows($res) > 0){
        echo '<div class="alert alert-danger" role="alert">
  Date  & Time Conflicts, Already Have Event!
</div>';
    }else{
        $sql  = "INSERT INTO event(title,date,time,type,venue,user_id) VALUE ('$title','$date','$time','$type','$venue','$user_id')";

        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        $t = "New Event Added".$title;

        $d = "You have been added recently new event-".$t." Date: ".$date." Time: ".$time;
        $current = date("Y-m-d H:i:s");

        $not = "INSERT INTO notification(user_id,title,des,datetime) VALUE ('$user_id','$t','$d','$current')";
        $result_2 = mysqli_query($conn,$not) or die(mysqli_error($conn));

        if($result && $result_2){
            echo '<div class="alert alert-success" role="alert">
  Add Event Successful!
</div>';
        }else{
            echo '<div class="alert alert-danger" role="alert">
  Something went wrong!
</div>';
        }
    }


}

?>