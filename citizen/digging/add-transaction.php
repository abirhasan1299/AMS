<?php

if(isset($_POST['payment'])){
    //add attribute element
    $client_id = $_POST['client_id'];
    $advocate_id = $_POST['advocate_id'];
    $date = $_POST['date'];
    $amount = $_POST['paid_fees'];
    $trans_id = $_POST['trans_id'];

    //notification attribure element
    $user_id_one = $_POST['client_id'];
    $user_id_two = $_POST['advocate_id'];
    $title_one = "Payment Successfully Done";
    $title_two = "Congrats ! New Payment Added - ".$amount;
    $des_one = "New Consultant Booking Done. Transaction ID is: ".$trans_id." <br>Someone will contact you very soon";
    $des_two = "Someone need consult with you. Transaction ID is: ".$trans_id." <br>Contact with him very soon";
    $datetime = date("Y-m-d H:i:s");

    // insert notification table
    $sql_one = "INSERT INTO notification(user_id,title,des,datetime) VALUE('$user_id_one','$title_one','$des_one','$datetime')";

    $sql_two= "INSERT INTO notification(user_id,title,des,datetime) VALUE('$user_id_two','$title_two','$des_two','$datetime')";

    //insert transaction table
    $sql_three = "INSERT INTO `transaction` (`client_id`, `advocate_id`, `paid_fees`, `transaction_code`, `date`) VALUE ('$client_id', '$advocate_id', '$amount', '$trans_id', '$date')";

     mysqli_query($conn, $sql_one) or die(mysqli_query($conn));
     mysqli_query($conn, $sql_two) or die(mysqli_query($conn));
     mysqli_query($conn, $sql_three) or die(mysqli_query($conn));

     echo '<div class="alert alert-success" role="alert">
            ✅ Booking Successfully Done
        </div>';


}