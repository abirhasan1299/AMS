<?php
if (isset($_POST['submit'])){
    include '../configuration/config.php';
    $title = $_POST['title'];
    $detail = $_POST['detail'];
    $client_name = $_POST['client_name'];
    $status = $_POST['status'];
    $date = date("Y-m-d");
    $code = strtoupper(uniqid());
    $user_id =$_POST['user_id'];

    $not_title = "Congrats ! Admin Give a Case: ".$title;
    $not_des = $detail;
    $datetime = date("Y-m-d H:i:s");

    $s = "INSERT INTO notification(user_id,title,des,datetime) VALUE('$user_id','$not_title','$not_des','$datetime')";

    mysqli_query($conn, $s);

    $sql = "INSERT INTO cases(code,user_id,title,detail,client_name,status,date) VALUE('$code','$user_id','$title','$detail','$client_name','$status','$date');";

    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if ($query) {
        echo '<div class="alert alert-success" role="alert">Case Added Successfully </div>';
    }else{
        echo '<div class="alert alert-danger" role="alert">Something Went Wrong ! </div>';
    }
}
?>