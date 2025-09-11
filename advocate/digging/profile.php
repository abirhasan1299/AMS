<?php
session_start();
if(isset($_POST['update'])){

    include '../../configuration/config.php';

    $sql = "SELECT * FROM profile WHERE user_id = {$_SESSION['id']}";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if (mysqli_num_rows($result) > 0) {
        //update query run
        $name = $_POST['name'];
        $job_post = $_POST['job_post'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $meet_link = $_POST['meet_link'];
        $specialization= $_POST['specialization'];
        $language      = $_POST['language'];
        $user_id       = $_SESSION['id'];
//===============Image Uplaod=============================
        $file_sql = "";
        if (isset($_FILES['profile_img']) && $_FILES['profile_img']['error'] === 0) {
            $file_name = $_FILES['profile_img']['name'];
            $tmp_name  = $_FILES['profile_img']['tmp_name'];
            $upload_dir = "../../uploads/profile/";

            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            $unique_name = time() . "_" . basename($file_name);
            $target_file = $upload_dir . $unique_name;

            if (move_uploaded_file($tmp_name, $target_file)) {
                $file_sql = ", profile_img='$target_file'";
            }
        }

        if($unique_name ==null){
            $sql = "UPDATE profile SET name='$name', post='$job_post', address='$address', contact='$contact', email='$email', meet_link='$meet_link',specialization='$specialization', language='$language' WHERE user_id={$user_id}";
        }else{
            $sql = "UPDATE profile SET name='$name', post='$job_post', address='$address', contact='$contact', email='$email', meet_link='$meet_link',img_name='$unique_name' ,specialization='$specialization', language='$language' WHERE user_id={$user_id}";
        }


        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if ($res) {
            header('location:../advocate_profile.php');
        }else{
            die('Error: ' . mysqli_error($conn));
        }
    }else{

        //new profile create
        $name = $_POST['name'];
        $job_post = $_POST['job_post'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $meet_link = $_POST['meet_link'];
        $specialization= $_POST['specialization'];
        $language      = $_POST['language'];
        $user_id       = $_SESSION['id'];
//===============Image Uplaod=============================
        $file_sql = "";
        if (isset($_FILES['profile_img']) && $_FILES['profile_img']['error'] === 0) {
            $file_name = $_FILES['profile_img']['name'];
            $tmp_name  = $_FILES['profile_img']['tmp_name'];
            $upload_dir = "../../uploads/profile/";

            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            $unique_name = time() . "_" . basename($file_name);
            $target_file = $upload_dir . $unique_name;

            if (move_uploaded_file($tmp_name, $target_file)) {
                $file_sql = ", profile_img='$target_file'";
            }
        }
        $sql = "INSERT INTO profile(user_id,name,post,address,contact,email,meet_link,img_name,specialization,language) VALUE('$user_id','$name','$job_post','$address','$contact','$email','$meet_link','$unique_name','$specialization','$language')";
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if ($res) {
            header('location:../advocate_profile.php');
        }else{
            die('Error: ' . mysqli_error($conn));
        }


    }

}